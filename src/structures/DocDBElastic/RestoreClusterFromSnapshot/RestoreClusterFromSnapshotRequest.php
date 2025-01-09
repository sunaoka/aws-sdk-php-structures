<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\RestoreClusterFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $kmsKeyId
 * @property int $shardCapacity
 * @property int $shardInstanceCount
 * @property string $snapshotArn
 * @property list<string> $subnetIds
 * @property array<string, string> $tags
 * @property list<string> $vpcSecurityGroupIds
 */
class RestoreClusterFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     kmsKeyId?: string,
     *     shardCapacity?: int,
     *     shardInstanceCount?: int,
     *     snapshotArn: string,
     *     subnetIds?: list<string>,
     *     tags?: array<string, string>,
     *     vpcSecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
