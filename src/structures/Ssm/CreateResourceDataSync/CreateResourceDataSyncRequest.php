<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncName
 * @property Shapes\ResourceDataSyncS3Destination $S3Destination
 * @property string $SyncType
 * @property Shapes\ResourceDataSyncSource $SyncSource
 */
class CreateResourceDataSyncRequest extends Request
{
    /**
     * @param array{
     *     SyncName: string,
     *     S3Destination?: Shapes\ResourceDataSyncS3Destination,
     *     SyncType?: string,
     *     SyncSource?: Shapes\ResourceDataSyncSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
