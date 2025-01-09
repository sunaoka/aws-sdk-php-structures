<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SyncName
 * @property string $SyncType
 * @property ResourceDataSyncSourceWithState $SyncSource
 * @property ResourceDataSyncS3Destination $S3Destination
 * @property \Aws\Api\DateTimeResult $LastSyncTime
 * @property \Aws\Api\DateTimeResult $LastSuccessfulSyncTime
 * @property \Aws\Api\DateTimeResult $SyncLastModifiedTime
 * @property 'Successful'|'Failed'|'InProgress' $LastStatus
 * @property \Aws\Api\DateTimeResult $SyncCreatedTime
 * @property string $LastSyncStatusMessage
 */
class ResourceDataSyncItem extends Shape
{
    /**
     * @param array{
     *     SyncName?: string,
     *     SyncType?: string,
     *     SyncSource?: ResourceDataSyncSourceWithState,
     *     S3Destination?: ResourceDataSyncS3Destination,
     *     LastSyncTime?: \Aws\Api\DateTimeResult,
     *     LastSuccessfulSyncTime?: \Aws\Api\DateTimeResult,
     *     SyncLastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastStatus?: 'Successful'|'Failed'|'InProgress',
     *     SyncCreatedTime?: \Aws\Api\DateTimeResult,
     *     LastSyncStatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
