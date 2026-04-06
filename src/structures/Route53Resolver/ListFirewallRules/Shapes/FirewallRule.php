<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirewallRuleGroupId
 * @property string|null $FirewallDomainListId
 * @property string|null $Name
 * @property int|null $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT'|null $Action
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $BlockResponse
 * @property string|null $BlockOverrideDomain
 * @property 'CNAME'|null $BlockOverrideDnsType
 * @property int|null $BlockOverrideTtl
 * @property string|null $CreatorRequestId
 * @property string|null $CreationTime
 * @property string|null $ModificationTime
 * @property 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN'|null $FirewallDomainRedirectionAction
 * @property string|null $Qtype
 */
class FirewallRule extends Shape
{
    /**
     * @param array{
     *     FirewallRuleGroupId?: string|null,
     *     FirewallDomainListId?: string|null,
     *     Name?: string|null,
     *     Priority?: int|null,
     *     Action?: 'ALLOW'|'BLOCK'|'ALERT'|null,
     *     BlockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     BlockOverrideDomain?: string|null,
     *     BlockOverrideDnsType?: 'CNAME'|null,
     *     BlockOverrideTtl?: int|null,
     *     CreatorRequestId?: string|null,
     *     CreationTime?: string|null,
     *     ModificationTime?: string|null,
     *     FirewallDomainRedirectionAction?: 'INSPECT_REDIRECTION_DOMAIN'|'TRUST_REDIRECTION_DOMAIN'|null,
     *     Qtype?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
