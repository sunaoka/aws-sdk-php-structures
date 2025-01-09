<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportSnapshotTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $ImportTaskId
 * @property SnapshotTaskDetail $SnapshotTaskDetail
 * @property list<Tag> $Tags
 */
class ImportSnapshotTask extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     ImportTaskId?: string,
     *     SnapshotTaskDetail?: SnapshotTaskDetail,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
