<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateLinkedWhatsAppBusinessAccountPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $timezone
 * @property list<WhatsAppWeeklyOperatingHoursEntry> $weeklyOperatingHours
 * @property list<WhatsAppHolidayScheduleEntry>|null $holidaySchedule
 */
class WhatsAppCallHours extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     timezone: string,
     *     weeklyOperatingHours: list<WhatsAppWeeklyOperatingHoursEntry>,
     *     holidaySchedule?: list<WhatsAppHolidayScheduleEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
