<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property 'ACTIVE'|'STANDBY'|'DELETED' $DesiredState
 */
class UpdateBridgeStateRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     DesiredState: 'ACTIVE'|'STANDBY'|'DELETED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
