<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncName
 * @property Shapes\ResourceDataSyncS3Destination|null $S3Destination
 * @property string|null $SyncType
 * @property Shapes\ResourceDataSyncSource|null $SyncSource
 */
class CreateResourceDataSyncRequest extends Request
{
    /**
     * @param array{
     *     SyncName: string,
     *     S3Destination?: Shapes\ResourceDataSyncS3Destination|null,
     *     SyncType?: string|null,
     *     SyncSource?: Shapes\ResourceDataSyncSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
