<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateRotation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MonthlySetting> $MonthlySettings
 * @property list<WeeklySetting> $WeeklySettings
 * @property list<HandOffTime> $DailySettings
 * @property int<1, max> $NumberOfOnCalls
 * @property array<'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|'SUN', list<CoverageTime>> $ShiftCoverages
 * @property int<1, 100> $RecurrenceMultiplier
 */
class RecurrenceSettings extends Shape
{
    /**
     * @param array{
     *     MonthlySettings?: list<MonthlySetting>,
     *     WeeklySettings?: list<WeeklySetting>,
     *     DailySettings?: list<HandOffTime>,
     *     NumberOfOnCalls: int<1, max>,
     *     ShiftCoverages?: array<'MON'|'TUE'|'WED'|'THU'|'FRI'|'SAT'|'SUN', list<CoverageTime>>,
     *     RecurrenceMultiplier: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
