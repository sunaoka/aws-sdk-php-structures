<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerlessCacheName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $Status
 * @property string $Engine
 * @property string $MajorEngineVersion
 * @property string $FullEngineVersion
 * @property CacheUsageLimits $CacheUsageLimits
 * @property string $KmsKeyId
 * @property list<string> $SecurityGroupIds
 * @property Endpoint $Endpoint
 * @property Endpoint $ReaderEndpoint
 * @property string $ARN
 * @property string $UserGroupId
 * @property list<string> $SubnetIds
 * @property int $SnapshotRetentionLimit
 * @property string $DailySnapshotTime
 */
class ServerlessCache extends Shape
{
    /**
     * @param array{
     *     ServerlessCacheName?: string,
     *     Description?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     Status?: string,
     *     Engine?: string,
     *     MajorEngineVersion?: string,
     *     FullEngineVersion?: string,
     *     CacheUsageLimits?: CacheUsageLimits,
     *     KmsKeyId?: string,
     *     SecurityGroupIds?: list<string>,
     *     Endpoint?: Endpoint,
     *     ReaderEndpoint?: Endpoint,
     *     ARN?: string,
     *     UserGroupId?: string,
     *     SubnetIds?: list<string>,
     *     SnapshotRetentionLimit?: int,
     *     DailySnapshotTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
