<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MSKClusterARN
 * @property string $TopicName
 * @property AuthenticationConfiguration $AuthenticationConfiguration
 * @property \Aws\Api\DateTimeResult|null $ReadFromTimestamp
 */
class MSKSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     MSKClusterARN: string,
     *     TopicName: string,
     *     AuthenticationConfiguration: AuthenticationConfiguration,
     *     ReadFromTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
