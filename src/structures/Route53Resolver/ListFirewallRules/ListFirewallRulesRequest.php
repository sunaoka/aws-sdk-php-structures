<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 * @property int|null $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT'|null $Action
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFirewallRulesRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupId: string,
     *     Priority?: int|null,
     *     Action?: 'ALLOW'|'BLOCK'|'ALERT'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
