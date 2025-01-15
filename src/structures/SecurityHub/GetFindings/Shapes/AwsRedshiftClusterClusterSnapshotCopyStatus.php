<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationRegion
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property int|null $RetentionPeriod
 * @property string|null $SnapshotCopyGrantName
 */
class AwsRedshiftClusterClusterSnapshotCopyStatus extends Shape
{
    /**
     * @param array{
     *     DestinationRegion?: string|null,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     RetentionPeriod?: int|null,
     *     SnapshotCopyGrantName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
