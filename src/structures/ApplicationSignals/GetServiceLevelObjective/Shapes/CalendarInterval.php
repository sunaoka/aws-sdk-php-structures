<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property 'DAY'|'MONTH' $DurationUnit
 * @property int<1, max> $Duration
 */
class CalendarInterval extends Shape
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     DurationUnit: 'DAY'|'MONTH',
     *     Duration: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
