<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NodeInputPort> $Inputs
 * @property list<NodeOutputPort> $Outputs
 */
class NodeInterface extends Shape
{
    /**
     * @param array{
     *     Inputs: list<NodeInputPort>,
     *     Outputs: list<NodeOutputPort>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
