<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApacheKafkaClusterDescription|null $apacheKafkaCluster
 */
class KafkaClusterDescription extends Shape
{
    /**
     * @param array{apacheKafkaCluster?: ApacheKafkaClusterDescription|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
