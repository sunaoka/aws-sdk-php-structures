<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonMskCluster $AmazonMskCluster
 * @property string $KafkaClusterAlias
 */
class KafkaClusterSummary extends Shape
{
    /**
     * @param array{
     *     AmazonMskCluster?: AmazonMskCluster,
     *     KafkaClusterAlias?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
