<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetLinkedWhatsAppBusinessAccountPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $dayOfWeek
 * @property WhatsAppTimeOfDay $openTime
 * @property WhatsAppTimeOfDay $closeTime
 */
class WhatsAppWeeklyOperatingHoursEntry extends Shape
{
    /**
     * @param array{
     *     dayOfWeek: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     openTime: WhatsAppTimeOfDay,
     *     closeTime: WhatsAppTimeOfDay
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
