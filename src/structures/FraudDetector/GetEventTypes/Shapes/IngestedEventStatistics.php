<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numberOfEvents
 * @property int $eventDataSizeInBytes
 * @property string $leastRecentEvent
 * @property string $mostRecentEvent
 * @property string $lastUpdatedTime
 */
class IngestedEventStatistics extends Shape
{
    /**
     * @param array{
     *     numberOfEvents?: int,
     *     eventDataSizeInBytes?: int,
     *     leastRecentEvent?: string,
     *     mostRecentEvent?: string,
     *     lastUpdatedTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
