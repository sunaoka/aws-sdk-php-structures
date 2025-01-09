<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeregisterGatewayInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayInstanceArn
 * @property 'REGISTERING'|'ACTIVE'|'DEREGISTERING'|'DEREGISTERED'|'REGISTRATION_ERROR'|'DEREGISTRATION_ERROR' $InstanceState
 */
class DeregisterGatewayInstanceResponse extends Response
{
}
