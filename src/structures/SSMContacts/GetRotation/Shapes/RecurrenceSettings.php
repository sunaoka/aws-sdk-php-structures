<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MonthlySetting> $MonthlySettings
 * @property list<WeeklySetting> $WeeklySettings
 * @property list<HandOffTime> $DailySettings
 * @property int $NumberOfOnCalls
 * @property array<'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|'SUN', list<CoverageTime>> $ShiftCoverages
 * @property int $RecurrenceMultiplier
 */
class RecurrenceSettings extends Shape
{
    /**
     * @param array{
     *     MonthlySettings?: list<MonthlySetting>,
     *     WeeklySettings?: list<WeeklySetting>,
     *     DailySettings?: list<HandOffTime>,
     *     NumberOfOnCalls: int,
     *     ShiftCoverages?: array<'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|'SUN', list<CoverageTime>>,
     *     RecurrenceMultiplier: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
