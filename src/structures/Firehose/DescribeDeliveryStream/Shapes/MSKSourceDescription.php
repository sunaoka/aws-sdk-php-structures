<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MSKClusterARN
 * @property string|null $TopicName
 * @property AuthenticationConfiguration|null $AuthenticationConfiguration
 * @property \Aws\Api\DateTimeResult|null $DeliveryStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $ReadFromTimestamp
 */
class MSKSourceDescription extends Shape
{
    /**
     * @param array{
     *     MSKClusterARN?: string|null,
     *     TopicName?: string|null,
     *     AuthenticationConfiguration?: AuthenticationConfiguration|null,
     *     DeliveryStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ReadFromTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
