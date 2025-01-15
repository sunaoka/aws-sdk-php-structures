<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigurationArn
 * @property int|null $ConfigurationRevision
 * @property string|null $KafkaVersion
 */
class BrokerSoftwareInfo extends Shape
{
    /**
     * @param array{
     *     ConfigurationArn?: string|null,
     *     ConfigurationRevision?: int|null,
     *     KafkaVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
