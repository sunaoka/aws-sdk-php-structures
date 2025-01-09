<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApacheKafkaClusterDescription $apacheKafkaCluster
 */
class KafkaClusterDescription extends Shape
{
    /**
     * @param array{apacheKafkaCluster?: ApacheKafkaClusterDescription} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
