<?php

namespace Sunaoka\Aws\Structures\FMS\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyArn
 * @property string $PolicyId
 * @property string $PolicyName
 * @property string $ResourceType
 * @property 'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON' $SecurityServiceType
 * @property bool $RemediationEnabled
 * @property bool $DeleteUnusedFMManagedResources
 * @property 'ACTIVE'|'OUT_OF_ADMIN_SCOPE' $PolicyStatus
 */
class PolicySummary extends Shape
{
    /**
     * @param array{
     *     PolicyArn?: string,
     *     PolicyId?: string,
     *     PolicyName?: string,
     *     ResourceType?: string,
     *     SecurityServiceType?: 'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON',
     *     RemediationEnabled?: bool,
     *     DeleteUnusedFMManagedResources?: bool,
     *     PolicyStatus?: 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
