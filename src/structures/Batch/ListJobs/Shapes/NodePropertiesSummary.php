<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isMainNode
 * @property int|null $numNodes
 * @property int|null $nodeIndex
 */
class NodePropertiesSummary extends Shape
{
    /**
     * @param array{
     *     isMainNode?: bool|null,
     *     numNodes?: int|null,
     *     nodeIndex?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
