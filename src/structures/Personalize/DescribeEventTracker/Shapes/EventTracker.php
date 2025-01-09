<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeEventTracker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $eventTrackerArn
 * @property string $accountId
 * @property string $trackingId
 * @property string $datasetGroupArn
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class EventTracker extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     eventTrackerArn?: string,
     *     accountId?: string,
     *     trackingId?: string,
     *     datasetGroupArn?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
