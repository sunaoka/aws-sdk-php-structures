<?php

namespace Sunaoka\Aws\Structures\FMS\PutPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON' $Type
 * @property string $ManagedServiceData
 * @property PolicyOption $PolicyOption
 */
class SecurityServicePolicyData extends Shape
{
    /**
     * @param array{
     *     Type: 'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON',
     *     ManagedServiceData?: string,
     *     PolicyOption?: PolicyOption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
