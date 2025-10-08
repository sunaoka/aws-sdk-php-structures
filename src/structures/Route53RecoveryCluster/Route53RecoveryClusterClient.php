<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster;

class Route53RecoveryClusterClient extends \Aws\Route53RecoveryCluster\Route53RecoveryClusterClient
{
    use GetRoutingControlState\GetRoutingControlStateTrait;
    use ListRoutingControls\ListRoutingControlsTrait;
    use UpdateRoutingControlState\UpdateRoutingControlStateTrait;
    use UpdateRoutingControlStates\UpdateRoutingControlStatesTrait;
}
