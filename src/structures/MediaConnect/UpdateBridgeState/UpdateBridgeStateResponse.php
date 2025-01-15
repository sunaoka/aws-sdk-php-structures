<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BridgeArn
 * @property 'ACTIVE'|'STANDBY'|'DELETED'|null $DesiredState
 */
class UpdateBridgeStateResponse extends Response
{
}
