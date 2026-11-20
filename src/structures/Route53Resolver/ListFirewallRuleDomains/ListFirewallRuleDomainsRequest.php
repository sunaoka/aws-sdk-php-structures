<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 * @property string|null $FirewallThreatProtectionId
 * @property string|null $FirewallDomainListId
 * @property Shapes\ListFirewallRuleDomainsQueryOptions|null $QueryOptions
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFirewallRuleDomainsRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupId: string,
     *     FirewallThreatProtectionId?: string|null,
     *     FirewallDomainListId?: string|null,
     *     QueryOptions?: Shapes\ListFirewallRuleDomainsQueryOptions|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
