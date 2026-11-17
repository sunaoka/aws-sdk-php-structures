<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SYNCING'|'PARTIALLY_RESOLVED'|'FULLY_RESOLVED'|'SYNC_FAILED'|'UNRESOLVED'|null $SyncStatus
 * @property string|null $StatusMessage
 */
class ContextStoreSyncState extends Shape
{
    /**
     * @param array{
     *     SyncStatus?: 'SYNCING'|'PARTIALLY_RESOLVED'|'FULLY_RESOLVED'|'SYNC_FAILED'|'UNRESOLVED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
