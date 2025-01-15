<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KinesisStreamARN
 * @property string|null $RoleARN
 * @property \Aws\Api\DateTimeResult|null $DeliveryStartTimestamp
 */
class KinesisStreamSourceDescription extends Shape
{
    /**
     * @param array{
     *     KinesisStreamARN?: string|null,
     *     RoleARN?: string|null,
     *     DeliveryStartTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
