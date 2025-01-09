<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonMskCluster $AmazonMskCluster
 * @property string $KafkaClusterAlias
 * @property KafkaClusterClientVpcConfig $VpcConfig
 */
class KafkaClusterDescription extends Shape
{
    /**
     * @param array{
     *     AmazonMskCluster?: AmazonMskCluster,
     *     KafkaClusterAlias?: string,
     *     VpcConfig?: KafkaClusterClientVpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
