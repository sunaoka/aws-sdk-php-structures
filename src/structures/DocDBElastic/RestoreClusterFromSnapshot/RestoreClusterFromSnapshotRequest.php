<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\RestoreClusterFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string|null $kmsKeyId
 * @property int|null $shardCapacity
 * @property int|null $shardInstanceCount
 * @property string $snapshotArn
 * @property list<string>|null $subnetIds
 * @property array<string, string>|null $tags
 * @property list<string>|null $vpcSecurityGroupIds
 */
class RestoreClusterFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     kmsKeyId?: string|null,
     *     shardCapacity?: int|null,
     *     shardInstanceCount?: int|null,
     *     snapshotArn: string,
     *     subnetIds?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     vpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
