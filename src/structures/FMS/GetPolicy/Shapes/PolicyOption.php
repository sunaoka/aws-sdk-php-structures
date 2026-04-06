<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkFirewallPolicy|null $NetworkFirewallPolicy
 * @property ThirdPartyFirewallPolicy|null $ThirdPartyFirewallPolicy
 */
class PolicyOption extends Shape
{
    /**
     * @param array{
     *     NetworkFirewallPolicy?: NetworkFirewallPolicy|null,
     *     ThirdPartyFirewallPolicy?: ThirdPartyFirewallPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
