<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 * @property string $Description
 * @property string $Engine
 * @property string $MajorEngineVersion
 * @property Shapes\CacheUsageLimits $CacheUsageLimits
 * @property string $KmsKeyId
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SnapshotArnsToRestore
 * @property list<Shapes\Tag> $Tags
 * @property string $UserGroupId
 * @property list<string> $SubnetIds
 * @property int $SnapshotRetentionLimit
 * @property string $DailySnapshotTime
 */
class CreateServerlessCacheRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName: string,
     *     Description?: string,
     *     Engine: string,
     *     MajorEngineVersion?: string,
     *     CacheUsageLimits?: Shapes\CacheUsageLimits,
     *     KmsKeyId?: string,
     *     SecurityGroupIds?: list<string>,
     *     SnapshotArnsToRestore?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     UserGroupId?: string,
     *     SubnetIds?: list<string>,
     *     SnapshotRetentionLimit?: int,
     *     DailySnapshotTime?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
