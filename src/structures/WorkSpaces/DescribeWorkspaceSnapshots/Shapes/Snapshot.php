<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $SnapshotTime
 */
class Snapshot extends Shape
{
    /**
     * @param array{SnapshotTime?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
