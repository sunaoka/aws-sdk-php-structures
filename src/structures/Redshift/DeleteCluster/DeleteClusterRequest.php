<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property bool|null $SkipFinalClusterSnapshot
 * @property string|null $FinalClusterSnapshotIdentifier
 * @property int|null $FinalClusterSnapshotRetentionPeriod
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     SkipFinalClusterSnapshot?: bool|null,
     *     FinalClusterSnapshotIdentifier?: string|null,
     *     FinalClusterSnapshotRetentionPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
