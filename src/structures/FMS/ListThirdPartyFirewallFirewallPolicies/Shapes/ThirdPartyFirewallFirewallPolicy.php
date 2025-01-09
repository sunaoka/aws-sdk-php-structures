<?php

namespace Sunaoka\Aws\Structures\FMS\ListThirdPartyFirewallFirewallPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallPolicyId
 * @property string $FirewallPolicyName
 */
class ThirdPartyFirewallFirewallPolicy extends Shape
{
    /**
     * @param array{
     *     FirewallPolicyId?: string,
     *     FirewallPolicyName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
