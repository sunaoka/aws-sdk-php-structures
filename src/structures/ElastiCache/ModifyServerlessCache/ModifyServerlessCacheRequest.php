<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyServerlessCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 * @property string $Description
 * @property Shapes\CacheUsageLimits $CacheUsageLimits
 * @property bool $RemoveUserGroup
 * @property string $UserGroupId
 * @property list<string> $SecurityGroupIds
 * @property int $SnapshotRetentionLimit
 * @property string $DailySnapshotTime
 * @property string $Engine
 * @property string $MajorEngineVersion
 */
class ModifyServerlessCacheRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName: string,
     *     Description?: string,
     *     CacheUsageLimits?: Shapes\CacheUsageLimits,
     *     RemoveUserGroup?: bool,
     *     UserGroupId?: string,
     *     SecurityGroupIds?: list<string>,
     *     SnapshotRetentionLimit?: int,
     *     DailySnapshotTime?: string,
     *     Engine?: string,
     *     MajorEngineVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
