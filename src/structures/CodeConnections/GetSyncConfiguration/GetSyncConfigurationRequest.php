<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetSyncConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CFN_STACK_SYNC' $SyncType
 * @property string $ResourceName
 */
class GetSyncConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SyncType: 'CFN_STACK_SYNC',
     *     ResourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
