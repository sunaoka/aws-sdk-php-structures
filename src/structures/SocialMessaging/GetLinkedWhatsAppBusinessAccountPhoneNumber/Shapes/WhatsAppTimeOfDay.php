<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetLinkedWhatsAppBusinessAccountPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 23> $hours
 * @property int<0, 59> $minutes
 */
class WhatsAppTimeOfDay extends Shape
{
    /**
     * @param array{
     *     hours: int<0, 23>,
     *     minutes: int<0, 59>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
