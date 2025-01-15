<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AssociateSubnets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property list<Shapes\SubnetMapping> $SubnetMappings
 */
class AssociateSubnetsRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     SubnetMappings: list<Shapes\SubnetMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
