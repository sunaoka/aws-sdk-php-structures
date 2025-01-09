<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DisassociateSubnets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FirewallArn
 * @property string $FirewallName
 * @property list<Shapes\SubnetMapping> $SubnetMappings
 * @property string $UpdateToken
 */
class DisassociateSubnetsResponse extends Response
{
}
