<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteResourceDataSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncName
 * @property string $SyncType
 */
class DeleteResourceDataSyncRequest extends Request
{
    /**
     * @param array{
     *     SyncName: string,
     *     SyncType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
