<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApacheKafkaClusterId
 * @property string $BootstrapBrokerString
 */
class ApacheKafkaCluster extends Shape
{
    /**
     * @param array{
     *     ApacheKafkaClusterId: string,
     *     BootstrapBrokerString: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
