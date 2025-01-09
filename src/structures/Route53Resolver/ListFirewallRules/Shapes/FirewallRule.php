<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallRuleGroupId
 * @property string $FirewallDomainListId
 * @property string $FirewallThreatProtectionId
 * @property string $Name
 * @property int $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT' $Action
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE' $BlockResponse
 * @property string $BlockOverrideDomain
 * @property 'CNAME' $BlockOverrideDnsType
 * @property int $BlockOverrideTtl
 * @property string $CreatorRequestId
 * @property string $CreationTime
 * @property string $ModificationTime
 * @property 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN' $FirewallDomainRedirectionAction
 * @property string $Qtype
 * @property 'DGA'|'DNS_TUNNELING' $DnsThreatProtection
 * @property 'LOW'|'MEDIUM'|'HIGH' $ConfidenceThreshold
 */
class FirewallRule extends Shape
{
    /**
     * @param array{
     *     FirewallRuleGroupId?: string,
     *     FirewallDomainListId?: string,
     *     FirewallThreatProtectionId?: string,
     *     Name?: string,
     *     Priority?: int,
     *     Action?: 'ALLOW'|'BLOCK'|'ALERT',
     *     BlockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE',
     *     BlockOverrideDomain?: string,
     *     BlockOverrideDnsType?: 'CNAME',
     *     BlockOverrideTtl?: int,
     *     CreatorRequestId?: string,
     *     CreationTime?: string,
     *     ModificationTime?: string,
     *     FirewallDomainRedirectionAction?: 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN',
     *     Qtype?: string,
     *     DnsThreatProtection?: 'DGA'|'DNS_TUNNELING',
     *     ConfidenceThreshold?: 'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
