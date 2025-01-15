<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableSnapshotCopy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $DestinationRegion
 * @property int|null $RetentionPeriod
 * @property string|null $SnapshotCopyGrantName
 * @property int|null $ManualSnapshotRetentionPeriod
 */
class EnableSnapshotCopyRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     DestinationRegion: string,
     *     RetentionPeriod?: int|null,
     *     SnapshotCopyGrantName?: string|null,
     *     ManualSnapshotRetentionPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
