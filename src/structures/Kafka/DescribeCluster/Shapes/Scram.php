<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class Scram extends Shape
{
    /**
     * @param array{Enabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
