<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotIdentifier
 * @property string $ClusterIdentifier
 * @property int $ManualSnapshotRetentionPeriod
 * @property list<Shapes\Tag> $Tags
 */
class CreateClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifier: string,
     *     ClusterIdentifier: string,
     *     ManualSnapshotRetentionPeriod?: int,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
