<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPrefetchSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property RecurringConsumption $RecurringConsumption
 * @property RecurringRetrieval $RecurringRetrieval
 */
class RecurringPrefetchConfiguration extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     RecurringConsumption: RecurringConsumption,
     *     RecurringRetrieval: RecurringRetrieval
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
