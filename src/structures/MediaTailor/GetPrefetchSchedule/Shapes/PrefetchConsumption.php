<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPrefetchSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AvailMatchingCriteria> $AvailMatchingCriteria
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class PrefetchConsumption extends Shape
{
    /**
     * @param array{
     *     AvailMatchingCriteria?: list<AvailMatchingCriteria>,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
