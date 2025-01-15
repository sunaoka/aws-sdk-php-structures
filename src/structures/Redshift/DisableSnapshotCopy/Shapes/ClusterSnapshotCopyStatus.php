<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableSnapshotCopy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationRegion
 * @property int|null $RetentionPeriod
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property string|null $SnapshotCopyGrantName
 */
class ClusterSnapshotCopyStatus extends Shape
{
    /**
     * @param array{
     *     DestinationRegion?: string|null,
     *     RetentionPeriod?: int|null,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     SnapshotCopyGrantName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
