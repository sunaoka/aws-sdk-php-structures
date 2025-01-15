<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeEventTracker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $eventTrackerArn
 * @property string|null $accountId
 * @property string|null $trackingId
 * @property string|null $datasetGroupArn
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class EventTracker extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     eventTrackerArn?: string|null,
     *     accountId?: string|null,
     *     trackingId?: string|null,
     *     datasetGroupArn?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
