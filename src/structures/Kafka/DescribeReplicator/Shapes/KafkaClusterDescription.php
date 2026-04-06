<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonMskCluster|null $AmazonMskCluster
 * @property string|null $KafkaClusterAlias
 * @property KafkaClusterClientVpcConfig|null $VpcConfig
 */
class KafkaClusterDescription extends Shape
{
    /**
     * @param array{
     *     AmazonMskCluster?: AmazonMskCluster|null,
     *     KafkaClusterAlias?: string|null,
     *     VpcConfig?: KafkaClusterClientVpcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
