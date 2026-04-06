<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $FirewallRuleGroupId
 * @property string|null $FirewallDomainListId
 * @property int $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT' $Action
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $BlockResponse
 * @property string|null $BlockOverrideDomain
 * @property 'CNAME'|null $BlockOverrideDnsType
 * @property int<0, 604800>|null $BlockOverrideTtl
 * @property string $Name
 * @property 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN'|null $FirewallDomainRedirectionAction
 * @property string|null $Qtype
 * @property 'DGA'|'DNS_TUNNELING'|null $DnsThreatProtection
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $ConfidenceThreshold
 */
class CreateFirewallRuleRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     FirewallRuleGroupId: string,
     *     FirewallDomainListId?: string|null,
     *     Priority: int,
     *     Action: 'ALLOW'|'BLOCK'|'ALERT',
     *     BlockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     BlockOverrideDomain?: string|null,
     *     BlockOverrideDnsType?: 'CNAME'|null,
     *     BlockOverrideTtl?: int<0, 604800>|null,
     *     Name: string,
     *     FirewallDomainRedirectionAction?: 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN'|null,
     *     Qtype?: string|null,
     *     DnsThreatProtection?: 'DGA'|'DNS_TUNNELING'|null,
     *     ConfidenceThreshold?: 'LOW'|'MEDIUM'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
