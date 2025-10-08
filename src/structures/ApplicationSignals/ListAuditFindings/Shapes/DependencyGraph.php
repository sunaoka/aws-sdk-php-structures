<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Node>|null $Nodes
 * @property list<Edge>|null $Edges
 */
class DependencyGraph extends Shape
{
    /**
     * @param array{
     *     Nodes?: list<Node>|null,
     *     Edges?: list<Edge>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
