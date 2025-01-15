<?php

namespace Sunaoka\Aws\Structures\FMS\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyArn
 * @property string|null $PolicyId
 * @property string|null $PolicyName
 * @property string|null $ResourceType
 * @property 'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON'|null $SecurityServiceType
 * @property bool|null $RemediationEnabled
 * @property bool|null $DeleteUnusedFMManagedResources
 * @property 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'|null $PolicyStatus
 */
class PolicySummary extends Shape
{
    /**
     * @param array{
     *     PolicyArn?: string|null,
     *     PolicyId?: string|null,
     *     PolicyName?: string|null,
     *     ResourceType?: string|null,
     *     SecurityServiceType?: 'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON'|null,
     *     RemediationEnabled?: bool|null,
     *     DeleteUnusedFMManagedResources?: bool|null,
     *     PolicyStatus?: 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
