<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $message = $request->input('body');
        $from = $request->input('from');
        // Basic chatbot logic
        if ($message == 'hai') {
            $this->sendMessage($from, 'Hello! How can I help you today?');
        } elseif ($message == 'help') {
            $this->sendMessage($from, 'Here are the available commands...');
        } else {
            $this->sendMessage($from, 'Sorry, I did not understand that. Type "help" for options.');
        }
    }
    private function sendMessage($contact, $text)
    {
        CrunchzApp::channel()
            ->contact($contact)
            ->text(message: $text)
            ->send();
    }
}
