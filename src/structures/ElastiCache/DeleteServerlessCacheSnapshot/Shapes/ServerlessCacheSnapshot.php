<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteServerlessCacheSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerlessCacheSnapshotName
 * @property string $ARN
 * @property string $KmsKeyId
 * @property string $SnapshotType
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $ExpiryTime
 * @property string $BytesUsedForCache
 * @property ServerlessCacheConfiguration $ServerlessCacheConfiguration
 */
class ServerlessCacheSnapshot extends Shape
{
    /**
     * @param array{
     *     ServerlessCacheSnapshotName?: string,
     *     ARN?: string,
     *     KmsKeyId?: string,
     *     SnapshotType?: string,
     *     Status?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     ExpiryTime?: \Aws\Api\DateTimeResult,
     *     BytesUsedForCache?: string,
     *     ServerlessCacheConfiguration?: ServerlessCacheConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
