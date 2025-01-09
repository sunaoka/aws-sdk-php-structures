<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifySnapshotCopyRetentionPeriod\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationRegion
 * @property int $RetentionPeriod
 * @property int $ManualSnapshotRetentionPeriod
 * @property string $SnapshotCopyGrantName
 */
class ClusterSnapshotCopyStatus extends Shape
{
    /**
     * @param array{
     *     DestinationRegion?: string,
     *     RetentionPeriod?: int,
     *     ManualSnapshotRetentionPeriod?: int,
     *     SnapshotCopyGrantName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
