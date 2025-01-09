<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KinesisStreamARN
 * @property string $RoleARN
 * @property \Aws\Api\DateTimeResult $DeliveryStartTimestamp
 */
class KinesisStreamSourceDescription extends Shape
{
    /**
     * @param array{
     *     KinesisStreamARN?: string,
     *     RoleARN?: string,
     *     DeliveryStartTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
