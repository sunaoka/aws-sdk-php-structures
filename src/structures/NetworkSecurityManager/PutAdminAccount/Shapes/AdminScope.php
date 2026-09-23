<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdminScopeFilter|null $scopeFilter
 * @property AdminFirewallTypeScope|null $firewallTypeScope
 */
class AdminScope extends Shape
{
    /**
     * @param array{
     *     scopeFilter?: AdminScopeFilter|null,
     *     firewallTypeScope?: AdminFirewallTypeScope|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
