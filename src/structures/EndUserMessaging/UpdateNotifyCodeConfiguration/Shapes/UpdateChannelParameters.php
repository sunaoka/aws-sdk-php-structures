<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateNotifyCodeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateTextParameters|null $text
 * @property UpdateVoiceParameters|null $voice
 * @property UpdateNotifyParameters|null $notify
 * @property UpdateWhatsAppParameters|null $whatsApp
 */
class UpdateChannelParameters extends Shape
{
    /**
     * @param array{
     *     text?: UpdateTextParameters|null,
     *     voice?: UpdateVoiceParameters|null,
     *     notify?: UpdateNotifyParameters|null,
     *     whatsApp?: UpdateWhatsAppParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
