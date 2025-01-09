<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationRegion
 * @property int $ManualSnapshotRetentionPeriod
 * @property int $RetentionPeriod
 * @property string $SnapshotCopyGrantName
 */
class AwsRedshiftClusterClusterSnapshotCopyStatus extends Shape
{
    /**
     * @param array{
     *     DestinationRegion?: string,
     *     ManualSnapshotRetentionPeriod?: int,
     *     RetentionPeriod?: int,
     *     SnapshotCopyGrantName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
