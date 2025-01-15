<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCacheSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerlessCacheSnapshotName
 * @property string|null $ARN
 * @property string|null $KmsKeyId
 * @property string|null $SnapshotType
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $ExpiryTime
 * @property string|null $BytesUsedForCache
 * @property ServerlessCacheConfiguration|null $ServerlessCacheConfiguration
 */
class ServerlessCacheSnapshot extends Shape
{
    /**
     * @param array{
     *     ServerlessCacheSnapshotName?: string|null,
     *     ARN?: string|null,
     *     KmsKeyId?: string|null,
     *     SnapshotType?: string|null,
     *     Status?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     ExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     BytesUsedForCache?: string|null,
     *     ServerlessCacheConfiguration?: ServerlessCacheConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
