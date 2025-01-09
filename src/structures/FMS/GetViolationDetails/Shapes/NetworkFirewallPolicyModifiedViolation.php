<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property NetworkFirewallPolicyDescription $CurrentPolicyDescription
 * @property NetworkFirewallPolicyDescription $ExpectedPolicyDescription
 */
class NetworkFirewallPolicyModifiedViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     CurrentPolicyDescription?: NetworkFirewallPolicyDescription,
     *     ExpectedPolicyDescription?: NetworkFirewallPolicyDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
