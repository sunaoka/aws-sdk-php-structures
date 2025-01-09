<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Status
 * @property string $Slots
 * @property list<Node> $Nodes
 * @property int $NumberOfNodes
 */
class Shard extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: string,
     *     Slots?: string,
     *     Nodes?: list<Node>,
     *     NumberOfNodes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
