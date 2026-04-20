<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonMskCluster|null $AmazonMskCluster
 * @property ApacheKafkaCluster|null $ApacheKafkaCluster
 * @property KafkaClusterClientVpcConfig|null $VpcConfig
 * @property KafkaClusterClientAuthentication|null $ClientAuthentication
 * @property KafkaClusterEncryptionInTransit|null $EncryptionInTransit
 */
class KafkaCluster extends Shape
{
    /**
     * @param array{
     *     AmazonMskCluster?: AmazonMskCluster|null,
     *     ApacheKafkaCluster?: ApacheKafkaCluster|null,
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
