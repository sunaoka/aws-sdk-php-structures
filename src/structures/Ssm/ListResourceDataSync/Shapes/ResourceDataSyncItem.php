<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SyncName
 * @property string|null $SyncType
 * @property ResourceDataSyncSourceWithState|null $SyncSource
 * @property ResourceDataSyncS3Destination|null $S3Destination
 * @property \Aws\Api\DateTimeResult|null $LastSyncTime
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulSyncTime
 * @property \Aws\Api\DateTimeResult|null $SyncLastModifiedTime
 * @property 'Successful'|'Failed'|'InProgress'|null $LastStatus
 * @property \Aws\Api\DateTimeResult|null $SyncCreatedTime
 * @property string|null $LastSyncStatusMessage
 */
class ResourceDataSyncItem extends Shape
{
    /**
     * @param array{
     *     SyncName?: string|null,
     *     SyncType?: string|null,
     *     SyncSource?: ResourceDataSyncSourceWithState|null,
     *     S3Destination?: ResourceDataSyncS3Destination|null,
     *     LastSyncTime?: \Aws\Api\DateTimeResult|null,
     *     LastSuccessfulSyncTime?: \Aws\Api\DateTimeResult|null,
     *     SyncLastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastStatus?: 'Successful'|'Failed'|'InProgress'|null,
     *     SyncCreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastSyncStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
