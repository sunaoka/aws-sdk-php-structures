<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $allFirewallTypesEnabled
 * @property list<'WAF'|'SHIELD_ADVANCED'>|null $firewallTypes
 */
class AdminFirewallTypeScope extends Shape
{
    /**
     * @param array{
     *     allFirewallTypesEnabled?: bool|null,
     *     firewallTypes?: list<'WAF'|'SHIELD_ADVANCED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
