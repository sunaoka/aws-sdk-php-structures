<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdminScopeFilterInput|null $scopeFilter
 * @property AdminFirewallTypeScope|null $firewallTypeScope
 */
class AdminScopeInput extends Shape
{
    /**
     * @param array{
     *     scopeFilter?: AdminScopeFilterInput|null,
     *     firewallTypeScope?: AdminFirewallTypeScope|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
