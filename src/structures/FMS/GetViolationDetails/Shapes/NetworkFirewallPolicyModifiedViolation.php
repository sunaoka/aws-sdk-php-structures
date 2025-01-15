<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property NetworkFirewallPolicyDescription|null $CurrentPolicyDescription
 * @property NetworkFirewallPolicyDescription|null $ExpectedPolicyDescription
 */
class NetworkFirewallPolicyModifiedViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     CurrentPolicyDescription?: NetworkFirewallPolicyDescription|null,
     *     ExpectedPolicyDescription?: NetworkFirewallPolicyDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
