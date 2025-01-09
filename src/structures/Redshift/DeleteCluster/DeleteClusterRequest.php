<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property bool $SkipFinalClusterSnapshot
 * @property string $FinalClusterSnapshotIdentifier
 * @property int $FinalClusterSnapshotRetentionPeriod
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     SkipFinalClusterSnapshot?: bool,
     *     FinalClusterSnapshotIdentifier?: string,
     *     FinalClusterSnapshotRetentionPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
