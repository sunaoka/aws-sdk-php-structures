<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MonthlySetting>|null $MonthlySettings
 * @property list<WeeklySetting>|null $WeeklySettings
 * @property list<HandOffTime>|null $DailySettings
 * @property int<1, max> $NumberOfOnCalls
 * @property array<'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|'SUN', list<CoverageTime>>|null $ShiftCoverages
 * @property int<1, 100> $RecurrenceMultiplier
 */
class RecurrenceSettings extends Shape
{
    /**
     * @param array{
     *     MonthlySettings?: list<MonthlySetting>|null,
     *     WeeklySettings?: list<WeeklySetting>|null,
     *     DailySettings?: list<HandOffTime>|null,
     *     NumberOfOnCalls: int<1, max>,
     *     ShiftCoverages?: array<'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|'SUN', list<CoverageTime>>|null,
     *     RecurrenceMultiplier: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
