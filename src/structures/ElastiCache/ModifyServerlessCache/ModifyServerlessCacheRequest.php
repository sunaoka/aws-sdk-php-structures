<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyServerlessCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 * @property string|null $Description
 * @property Shapes\CacheUsageLimits|null $CacheUsageLimits
 * @property bool|null $RemoveUserGroup
 * @property string|null $UserGroupId
 * @property list<string>|null $SecurityGroupIds
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $DailySnapshotTime
 */
class ModifyServerlessCacheRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName: string,
     *     Description?: string|null,
     *     CacheUsageLimits?: Shapes\CacheUsageLimits|null,
     *     RemoveUserGroup?: bool|null,
     *     UserGroupId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SnapshotRetentionLimit?: int|null,
     *     DailySnapshotTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
