<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BridgeArn
 * @property 'ACTIVE'|'STANDBY'|'DELETED' $DesiredState
 */
class UpdateBridgeStateResponse extends Response
{
}
