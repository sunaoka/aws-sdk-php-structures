<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchUpdateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallRuleGroupId
 * @property string|null $FirewallDomainListId
 * @property string|null $FirewallThreatProtectionId
 * @property int|null $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT'|null $Action
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $BlockResponse
 * @property string|null $BlockOverrideDomain
 * @property 'CNAME'|null $BlockOverrideDnsType
 * @property int<0, 604800>|null $BlockOverrideTtl
 * @property string|null $Name
 * @property 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN'|null $FirewallDomainRedirectionAction
 * @property string|null $Qtype
 * @property 'DGA'|'DNS_TUNNELING'|'DICTIONARY_DGA'|null $DnsThreatProtection
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $ConfidenceThreshold
 * @property FirewallRuleType|null $FirewallRuleType
 */
class UpdateFirewallRuleEntry extends Shape
{
    /**
     * @param array{
     *     FirewallRuleGroupId: string,
     *     FirewallDomainListId?: string|null,
     *     FirewallThreatProtectionId?: string|null,
     *     Priority?: int|null,
     *     Action?: 'ALLOW'|'BLOCK'|'ALERT'|null,
     *     BlockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     BlockOverrideDomain?: string|null,
     *     BlockOverrideDnsType?: 'CNAME'|null,
     *     BlockOverrideTtl?: int<0, 604800>|null,
     *     Name?: string|null,
     *     FirewallDomainRedirectionAction?: 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN'|null,
     *     Qtype?: string|null,
     *     DnsThreatProtection?: 'DGA'|'DNS_TUNNELING'|'DICTIONARY_DGA'|null,
     *     ConfidenceThreshold?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     FirewallRuleType?: FirewallRuleType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
