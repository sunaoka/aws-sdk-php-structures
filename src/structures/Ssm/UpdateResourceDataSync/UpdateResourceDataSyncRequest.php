<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateResourceDataSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncName
 * @property string $SyncType
 * @property Shapes\ResourceDataSyncSource $SyncSource
 */
class UpdateResourceDataSyncRequest extends Request
{
    /**
     * @param array{
     *     SyncName: string,
     *     SyncType: string,
     *     SyncSource: Shapes\ResourceDataSyncSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
