<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationArn
 * @property int $ConfigurationRevision
 * @property string $KafkaVersion
 */
class BrokerSoftwareInfo extends Shape
{
    /**
     * @param array{
     *     ConfigurationArn?: string,
     *     ConfigurationRevision?: int,
     *     KafkaVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
