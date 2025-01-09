<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $SnapshotId
 * @property 'Auto'|'Manual' $Type
 * @property string $Name
 * @property 'Creating'|'Completed'|'Failed' $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     SnapshotId?: string,
     *     Type?: 'Auto'|'Manual',
     *     Name?: string,
     *     Status?: 'Creating'|'Completed'|'Failed',
     *     StartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
