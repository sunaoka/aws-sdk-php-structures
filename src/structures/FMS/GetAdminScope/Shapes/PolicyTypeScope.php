<?php

namespace Sunaoka\Aws\Structures\FMS\GetAdminScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON'>|null $PolicyTypes
 * @property bool|null $AllPolicyTypesEnabled
 */
class PolicyTypeScope extends Shape
{
    /**
     * @param array{
     *     PolicyTypes?: list<'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON'>|null,
     *     AllPolicyTypesEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
