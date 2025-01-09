<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApacheKafkaCluster $apacheKafkaCluster
 */
class KafkaCluster extends Shape
{
    /**
     * @param array{apacheKafkaCluster: ApacheKafkaCluster} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
