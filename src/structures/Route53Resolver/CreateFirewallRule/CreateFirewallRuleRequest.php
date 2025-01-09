<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $FirewallRuleGroupId
 * @property string $FirewallDomainListId
 * @property int $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT' $Action
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE' $BlockResponse
 * @property string $BlockOverrideDomain
 * @property 'CNAME' $BlockOverrideDnsType
 * @property int $BlockOverrideTtl
 * @property string $Name
 * @property 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN' $FirewallDomainRedirectionAction
 * @property string $Qtype
 * @property 'DGA'|'DNS_TUNNELING' $DnsThreatProtection
 * @property 'LOW'|'MEDIUM'|'HIGH' $ConfidenceThreshold
 */
class CreateFirewallRuleRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     FirewallRuleGroupId: string,
     *     FirewallDomainListId?: string,
     *     Priority: int,
     *     Action: 'ALLOW'|'BLOCK'|'ALERT',
     *     BlockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE',
     *     BlockOverrideDomain?: string,
     *     BlockOverrideDnsType?: 'CNAME',
     *     BlockOverrideTtl?: int,
     *     Name: string,
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
