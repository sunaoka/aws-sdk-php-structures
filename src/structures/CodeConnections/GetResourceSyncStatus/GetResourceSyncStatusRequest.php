<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetResourceSyncStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceName
 * @property 'CFN_STACK_SYNC' $SyncType
 */
class GetResourceSyncStatusRequest extends Request
{
    /**
     * @param array{
     *     ResourceName: string,
     *     SyncType: 'CFN_STACK_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
