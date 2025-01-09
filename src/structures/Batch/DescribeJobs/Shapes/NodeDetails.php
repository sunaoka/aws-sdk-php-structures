<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $nodeIndex
 * @property bool $isMainNode
 */
class NodeDetails extends Shape
{
    /**
     * @param array{
     *     nodeIndex?: int,
     *     isMainNode?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
