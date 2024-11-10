<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SurveyMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $pdf, $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf, $data)
    {
        $this->pdf = $pdf;
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Survey Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(view: 'mails.survey-mail');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function build()
    {
        $data = $this->data;

        return $this->view('mails.survey-mail', compact('data'))
            ->attachData($this->pdf, 'document.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
