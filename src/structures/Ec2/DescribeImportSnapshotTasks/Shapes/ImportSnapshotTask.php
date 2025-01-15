<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportSnapshotTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $ImportTaskId
 * @property SnapshotTaskDetail|null $SnapshotTaskDetail
 * @property list<Tag>|null $Tags
 */
class ImportSnapshotTask extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ImportTaskId?: string|null,
     *     SnapshotTaskDetail?: SnapshotTaskDetail|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
