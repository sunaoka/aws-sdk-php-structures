<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MskClusterArn
 */
class AmazonMskCluster extends Shape
{
    /**
     * @param array{MskClusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
