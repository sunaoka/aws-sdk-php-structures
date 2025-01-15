<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numberOfEvents
 * @property int|null $eventDataSizeInBytes
 * @property string|null $leastRecentEvent
 * @property string|null $mostRecentEvent
 * @property string|null $lastUpdatedTime
 */
class IngestedEventStatistics extends Shape
{
    /**
     * @param array{
     *     numberOfEvents?: int|null,
     *     eventDataSizeInBytes?: int|null,
     *     leastRecentEvent?: string|null,
     *     mostRecentEvent?: string|null,
     *     lastUpdatedTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
