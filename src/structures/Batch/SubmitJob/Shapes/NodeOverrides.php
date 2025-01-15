<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numNodes
 * @property list<NodePropertyOverride>|null $nodePropertyOverrides
 */
class NodeOverrides extends Shape
{
    /**
     * @param array{
     *     numNodes?: int|null,
     *     nodePropertyOverrides?: list<NodePropertyOverride>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
