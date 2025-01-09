<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AssociateSubnets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string $FirewallArn
 * @property string $FirewallName
 * @property list<Shapes\SubnetMapping> $SubnetMappings
 */
class AssociateSubnetsRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string,
     *     FirewallArn?: string,
     *     FirewallName?: string,
     *     SubnetMappings: list<Shapes\SubnetMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
