<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AddInvoice extends Notification
{
    use Queueable;

    protected $invoiceId;

    public function __construct($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = 'http://127.0.0.1:8000/InvoicesDetails/'.$this->invoiceId;
        return (new MailMessage)
                    ->line('New Invoice Added.')
                    ->action('View Invoice', url('/invoices/'.$this->invoiceId))
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'invoice_id' => $this->invoiceId,
        ];
    }
}
