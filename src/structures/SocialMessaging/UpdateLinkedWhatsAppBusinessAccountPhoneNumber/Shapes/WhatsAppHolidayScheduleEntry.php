<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateLinkedWhatsAppBusinessAccountPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $date
 * @property WhatsAppTimeOfDay $startTime
 * @property WhatsAppTimeOfDay $endTime
 */
class WhatsAppHolidayScheduleEntry extends Shape
{
    /**
     * @param array{
     *     date: string,
     *     startTime: WhatsAppTimeOfDay,
     *     endTime: WhatsAppTimeOfDay
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
