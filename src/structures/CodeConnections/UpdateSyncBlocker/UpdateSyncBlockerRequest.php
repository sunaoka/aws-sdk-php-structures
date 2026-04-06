<?php

namespace Sunaoka\Aws\Structures\CodeConnections\UpdateSyncBlocker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property 'CFN_STACK_SYNC' $SyncType
 * @property string $ResourceName
 * @property string $ResolvedReason
 */
class UpdateSyncBlockerRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     SyncType: 'CFN_STACK_SYNC',
     *     ResourceName: string,
     *     ResolvedReason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
