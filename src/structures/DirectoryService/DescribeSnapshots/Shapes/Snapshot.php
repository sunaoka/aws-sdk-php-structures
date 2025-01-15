<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $SnapshotId
 * @property 'Auto'|'Manual'|null $Type
 * @property string|null $Name
 * @property 'Creating'|'Completed'|'Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     SnapshotId?: string|null,
     *     Type?: 'Auto'|'Manual'|null,
     *     Name?: string|null,
     *     Status?: 'Creating'|'Completed'|'Failed'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
