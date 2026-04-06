<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $FirewallRuleGroupId
 * @property string $FirewallDomainListId
 * @property int $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT' $Action
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $BlockResponse
 * @property string|null $BlockOverrideDomain
 * @property 'CNAME'|null $BlockOverrideDnsType
 * @property int<0, 604800>|null $BlockOverrideTtl
 * @property string $Name
 * @property 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN'|null $FirewallDomainRedirectionAction
 * @property string|null $Qtype
 */
class CreateFirewallRuleRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     FirewallRuleGroupId: string,
     *     FirewallDomainListId: string,
     *     Priority: int,
     *     Action: 'ALLOW'|'BLOCK'|'ALERT',
     *     BlockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     BlockOverrideDomain?: string|null,
     *     BlockOverrideDnsType?: 'CNAME'|null,
     *     BlockOverrideTtl?: int<0, 604800>|null,
     *     Name: string,
     *     FirewallDomainRedirectionAction?: 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN'|null,
     *     Qtype?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
