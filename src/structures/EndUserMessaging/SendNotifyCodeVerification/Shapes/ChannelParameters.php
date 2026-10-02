<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\SendNotifyCodeVerification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextParameters|null $text
 * @property VoiceParameters|null $voice
 * @property NotifyParameters|null $notify
 * @property WhatsAppParameters|null $whatsApp
 */
class ChannelParameters extends Shape
{
    /**
     * @param array{
     *     text?: TextParameters|null,
     *     voice?: VoiceParameters|null,
     *     notify?: NotifyParameters|null,
     *     whatsApp?: WhatsAppParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
