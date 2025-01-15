<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyServerlessCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerlessCacheName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property string|null $Status
 * @property string|null $Engine
 * @property string|null $MajorEngineVersion
 * @property string|null $FullEngineVersion
 * @property CacheUsageLimits|null $CacheUsageLimits
 * @property string|null $KmsKeyId
 * @property list<string>|null $SecurityGroupIds
 * @property Endpoint|null $Endpoint
 * @property Endpoint|null $ReaderEndpoint
 * @property string|null $ARN
 * @property string|null $UserGroupId
 * @property list<string>|null $SubnetIds
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $DailySnapshotTime
 */
class ServerlessCache extends Shape
{
    /**
     * @param array{
     *     ServerlessCacheName?: string|null,
     *     Description?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null,
     *     Engine?: string|null,
     *     MajorEngineVersion?: string|null,
     *     FullEngineVersion?: string|null,
     *     CacheUsageLimits?: CacheUsageLimits|null,
     *     KmsKeyId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     Endpoint?: Endpoint|null,
     *     ReaderEndpoint?: Endpoint|null,
     *     ARN?: string|null,
     *     UserGroupId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     SnapshotRetentionLimit?: int|null,
     *     DailySnapshotTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
