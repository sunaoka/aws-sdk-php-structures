<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteResourceDataSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncName
 * @property string|null $SyncType
 */
class DeleteResourceDataSyncRequest extends Request
{
    /**
     * @param array{
     *     SyncName: string,
     *     SyncType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
