<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MSKClusterARN
 * @property string $TopicName
 * @property AuthenticationConfiguration $AuthenticationConfiguration
 * @property \Aws\Api\DateTimeResult $DeliveryStartTimestamp
 * @property \Aws\Api\DateTimeResult $ReadFromTimestamp
 */
class MSKSourceDescription extends Shape
{
    /**
     * @param array{
     *     MSKClusterARN?: string,
     *     TopicName?: string,
     *     AuthenticationConfiguration?: AuthenticationConfiguration,
     *     DeliveryStartTimestamp?: \Aws\Api\DateTimeResult,
     *     ReadFromTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
