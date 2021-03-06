<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $order;

    /**
     * OrderCreated constructor.
     * @param $name
     * @param $order
     */
    public function __construct($name)
    {
        $this->name = $name;
        //$this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.order_created', ['name' => $this->name]);
//        $fullSum = $this->order->calculateFullSum();
//        return $this->view('mail.order_created', [
//            'name' => $this->name,
//            'fullSum' => $fullSum,
//            'order' => $this->order
//        ]);
    }
}
