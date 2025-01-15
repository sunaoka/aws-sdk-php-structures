<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DisassociateSubnets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property list<Shapes\SubnetMapping>|null $SubnetMappings
 * @property string|null $UpdateToken
 */
class DisassociateSubnetsResponse extends Response
{
}
