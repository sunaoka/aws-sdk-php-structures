<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkFirewallPolicy|null $NetworkFirewallPolicy
 * @property ThirdPartyFirewallPolicy|null $ThirdPartyFirewallPolicy
 * @property NetworkAclCommonPolicy|null $NetworkAclCommonPolicy
 */
class PolicyOption extends Shape
{
    /**
     * @param array{
     *     NetworkFirewallPolicy?: NetworkFirewallPolicy|null,
     *     ThirdPartyFirewallPolicy?: ThirdPartyFirewallPolicy|null,
     *     NetworkAclCommonPolicy?: NetworkAclCommonPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
