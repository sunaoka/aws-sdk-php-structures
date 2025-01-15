<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $SnapshotTime
 */
class Snapshot extends Shape
{
    /**
     * @param array{SnapshotTime?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
