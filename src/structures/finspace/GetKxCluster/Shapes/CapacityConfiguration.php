<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeType
 * @property int<1, max> $nodeCount
 */
class CapacityConfiguration extends Shape
{
    /**
     * @param array{
     *     nodeType?: string,
     *     nodeCount?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
