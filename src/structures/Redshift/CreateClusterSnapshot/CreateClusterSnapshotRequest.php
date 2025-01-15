<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotIdentifier
 * @property string $ClusterIdentifier
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifier: string,
     *     ClusterIdentifier: string,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
