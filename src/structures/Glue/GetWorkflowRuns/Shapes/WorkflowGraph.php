<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Node> $Nodes
 * @property list<Edge> $Edges
 */
class WorkflowGraph extends Shape
{
    /**
     * @param array{
     *     Nodes?: list<Node>,
     *     Edges?: list<Edge>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
