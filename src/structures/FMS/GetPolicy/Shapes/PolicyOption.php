<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkFirewallPolicy $NetworkFirewallPolicy
 * @property ThirdPartyFirewallPolicy $ThirdPartyFirewallPolicy
 * @property NetworkAclCommonPolicy $NetworkAclCommonPolicy
 */
class PolicyOption extends Shape
{
    /**
     * @param array{
     *     NetworkFirewallPolicy?: NetworkFirewallPolicy,
     *     ThirdPartyFirewallPolicy?: ThirdPartyFirewallPolicy,
     *     NetworkAclCommonPolicy?: NetworkAclCommonPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
