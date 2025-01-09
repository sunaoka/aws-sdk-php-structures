<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeInMiB
 */
class MemoryInfo extends Shape
{
    /**
     * @param array{sizeInMiB?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
