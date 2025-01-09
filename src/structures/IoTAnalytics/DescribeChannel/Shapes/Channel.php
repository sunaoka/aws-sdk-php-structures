<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ChannelStorage $storage
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 * @property RetentionPeriod $retentionPeriod
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property \Aws\Api\DateTimeResult $lastMessageArrivalTime
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     storage?: ChannelStorage,
     *     arn?: string,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING',
     *     retentionPeriod?: RetentionPeriod,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     lastMessageArrivalTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
