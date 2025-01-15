<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nodeType
 * @property int<1, max>|null $nodeCount
 */
class CapacityConfiguration extends Shape
{
    /**
     * @param array{
     *     nodeType?: string|null,
     *     nodeCount?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
