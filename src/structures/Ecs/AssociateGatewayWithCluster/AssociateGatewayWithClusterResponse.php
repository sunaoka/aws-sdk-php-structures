<?php

namespace Sunaoka\Aws\Structures\Ecs\AssociateGatewayWithCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $gatewayArn
 * @property string|null $clusterArn
 * @property 'ACTIVE'|'DISASSOCIATING'|'INACTIVE'|null $status
 */
class AssociateGatewayWithClusterResponse extends Response
{
}
