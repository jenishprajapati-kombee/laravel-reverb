<?php

namespace App\Livewire;
use App\Events\PushNotification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;

use Livewire\Component;

class RealTimeMessage extends Component
{
    use LivewireAlert;
    
    public $message;

    public function triggerEvent(): void
    {
        event(new PushNotification($this->message));
        $this->message = '';
    }

    #[On('echo:my-channel,PushNotification')]
    public function handleRealTimeMessage($message): void
    {
        $this->alert('success', $message['message']);
    }


    public function render()
    {
        return view('livewire.real-time-message');
    }
}
