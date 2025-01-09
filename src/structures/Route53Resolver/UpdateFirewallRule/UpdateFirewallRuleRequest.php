<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 * @property string $FirewallDomainListId
 * @property string $FirewallThreatProtectionId
 * @property int $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT' $Action
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE' $BlockResponse
 * @property string $BlockOverrideDomain
 * @property 'CNAME' $BlockOverrideDnsType
 * @property int<0, 604800> $BlockOverrideTtl
 * @property string $Name
 * @property 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN' $FirewallDomainRedirectionAction
 * @property string $Qtype
 * @property 'DGA'|'DNS_TUNNELING' $DnsThreatProtection
 * @property 'LOW'|'MEDIUM'|'HIGH' $ConfidenceThreshold
 */
class UpdateFirewallRuleRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupId: string,
     *     FirewallDomainListId?: string,
     *     FirewallThreatProtectionId?: string,
     *     Priority?: int,
     *     Action?: 'ALLOW'|'BLOCK'|'ALERT',
     *     BlockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE',
     *     BlockOverrideDomain?: string,
     *     BlockOverrideDnsType?: 'CNAME',
     *     BlockOverrideTtl?: int<0, 604800>,
     *     Name?: string,
     *     FirewallDomainRedirectionAction?: 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN',
     *     Qtype?: string,
     *     DnsThreatProtection?: 'DGA'|'DNS_TUNNELING',
     *     ConfidenceThreshold?: 'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
