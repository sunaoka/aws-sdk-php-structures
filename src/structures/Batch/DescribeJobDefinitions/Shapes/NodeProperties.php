<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numNodes
 * @property int $mainNode
 * @property list<NodeRangeProperty> $nodeRangeProperties
 */
class NodeProperties extends Shape
{
    /**
     * @param array{
     *     numNodes: int,
     *     mainNode: int,
     *     nodeRangeProperties: list<NodeRangeProperty>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
