<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numNodes
 * @property list<NodePropertyOverride> $nodePropertyOverrides
 */
class NodeOverrides extends Shape
{
    /**
     * @param array{
     *     numNodes?: int,
     *     nodePropertyOverrides?: list<NodePropertyOverride>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
