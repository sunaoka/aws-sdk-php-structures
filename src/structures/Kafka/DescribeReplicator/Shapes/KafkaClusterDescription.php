<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonMskCluster|null $AmazonMskCluster
 * @property ApacheKafkaCluster|null $ApacheKafkaCluster
 * @property string|null $KafkaClusterAlias
 * @property KafkaClusterClientVpcConfig|null $VpcConfig
 * @property KafkaClusterClientAuthentication|null $ClientAuthentication
 * @property KafkaClusterEncryptionInTransit|null $EncryptionInTransit
 */
class KafkaClusterDescription extends Shape
{
    /**
     * @param array{
     *     AmazonMskCluster?: AmazonMskCluster|null,
     *     ApacheKafkaCluster?: ApacheKafkaCluster|null,
     *     KafkaClusterAlias?: string|null,
     *     VpcConfig?: KafkaClusterClientVpcConfig|null,
     *     ClientAuthentication?: KafkaClusterClientAuthentication|null,
     *     EncryptionInTransit?: KafkaClusterEncryptionInTransit|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
