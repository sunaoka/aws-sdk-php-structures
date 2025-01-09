<?php

namespace Sunaoka\Aws\Structures\Redshift\CopyClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceSnapshotIdentifier
 * @property string $SourceSnapshotClusterIdentifier
 * @property string $TargetSnapshotIdentifier
 * @property int $ManualSnapshotRetentionPeriod
 */
class CopyClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceSnapshotIdentifier: string,
     *     SourceSnapshotClusterIdentifier?: string,
     *     TargetSnapshotIdentifier: string,
     *     ManualSnapshotRetentionPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
