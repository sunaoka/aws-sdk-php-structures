<?php

namespace Sunaoka\Aws\Structures\FMS\ListThirdPartyFirewallFirewallPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirewallPolicyId
 * @property string|null $FirewallPolicyName
 */
class ThirdPartyFirewallFirewallPolicy extends Shape
{
    /**
     * @param array{
     *     FirewallPolicyId?: string|null,
     *     FirewallPolicyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
