<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isMainNode
 * @property int $numNodes
 * @property int $nodeIndex
 */
class NodePropertiesSummary extends Shape
{
    /**
     * @param array{
     *     isMainNode?: bool,
     *     numNodes?: int,
     *     nodeIndex?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
