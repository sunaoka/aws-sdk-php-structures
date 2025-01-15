<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonMskCluster|null $AmazonMskCluster
 * @property string|null $KafkaClusterAlias
 */
class KafkaClusterSummary extends Shape
{
    /**
     * @param array{
     *     AmazonMskCluster?: AmazonMskCluster|null,
     *     KafkaClusterAlias?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
