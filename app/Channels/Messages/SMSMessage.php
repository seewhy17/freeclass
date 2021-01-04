<?php


namespace App\Channels\Messages;

class SMSMessage
{
  public $content;

  public function content($content)
  {
    $this->content = $content;

    return $this;
  }

  public function getMessage()
  {
      return $this->content;
  }
}
