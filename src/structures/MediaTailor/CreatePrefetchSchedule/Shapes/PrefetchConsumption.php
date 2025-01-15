<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AvailMatchingCriteria>|null $AvailMatchingCriteria
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class PrefetchConsumption extends Shape
{
    /**
     * @param array{
     *     AvailMatchingCriteria?: list<AvailMatchingCriteria>|null,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
