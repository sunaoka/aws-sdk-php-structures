<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableSnapshotCopy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $DestinationRegion
 * @property int $RetentionPeriod
 * @property string $SnapshotCopyGrantName
 * @property int $ManualSnapshotRetentionPeriod
 */
class EnableSnapshotCopyRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     DestinationRegion: string,
     *     RetentionPeriod?: int,
     *     SnapshotCopyGrantName?: string,
     *     ManualSnapshotRetentionPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
