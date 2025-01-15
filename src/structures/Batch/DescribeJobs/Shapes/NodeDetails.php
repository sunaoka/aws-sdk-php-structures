<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $nodeIndex
 * @property bool|null $isMainNode
 */
class NodeDetails extends Shape
{
    /**
     * @param array{
     *     nodeIndex?: int|null,
     *     isMainNode?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
