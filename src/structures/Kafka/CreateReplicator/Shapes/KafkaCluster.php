<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonMskCluster $AmazonMskCluster
 * @property KafkaClusterClientVpcConfig $VpcConfig
 */
class KafkaCluster extends Shape
{
    /**
     * @param array{
     *     AmazonMskCluster: AmazonMskCluster,
     *     VpcConfig: KafkaClusterClientVpcConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
