<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\GetRoutingControlState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RoutingControlArn
 * @property 'On'|'Off' $RoutingControlState
 * @property string|null $RoutingControlName
 */
class GetRoutingControlStateResponse extends Response
{
}
