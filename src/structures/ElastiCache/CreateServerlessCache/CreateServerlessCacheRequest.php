<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 * @property string|null $Description
 * @property string $Engine
 * @property string|null $MajorEngineVersion
 * @property Shapes\CacheUsageLimits|null $CacheUsageLimits
 * @property string|null $KmsKeyId
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $SnapshotArnsToRestore
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $UserGroupId
 * @property list<string>|null $SubnetIds
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $DailySnapshotTime
 */
class CreateServerlessCacheRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName: string,
     *     Description?: string|null,
     *     Engine: string,
     *     MajorEngineVersion?: string|null,
     *     CacheUsageLimits?: Shapes\CacheUsageLimits|null,
     *     KmsKeyId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SnapshotArnsToRestore?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     UserGroupId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     SnapshotRetentionLimit?: int|null,
     *     DailySnapshotTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
