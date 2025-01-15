<?php

namespace Sunaoka\Aws\Structures\Redshift\CopyClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceSnapshotIdentifier
 * @property string|null $SourceSnapshotClusterIdentifier
 * @property string $TargetSnapshotIdentifier
 * @property int|null $ManualSnapshotRetentionPeriod
 */
class CopyClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceSnapshotIdentifier: string,
     *     SourceSnapshotClusterIdentifier?: string|null,
     *     TargetSnapshotIdentifier: string,
     *     ManualSnapshotRetentionPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
