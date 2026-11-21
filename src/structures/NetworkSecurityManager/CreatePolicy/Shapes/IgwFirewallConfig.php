<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'flexible'|'bidirectional'|'outbound-only'|null $defaultSubnetConnectivity
 * @property list<SubnetConnectivityOverride>|null $subnetConnectivityOverrides
 */
class IgwFirewallConfig extends Shape
{
    /**
     * @param array{
     *     defaultSubnetConnectivity?: 'flexible'|'bidirectional'|'outbound-only'|null,
     *     subnetConnectivityOverrides?: list<SubnetConnectivityOverride>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
