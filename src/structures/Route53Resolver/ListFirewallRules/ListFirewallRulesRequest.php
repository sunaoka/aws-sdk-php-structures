<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 * @property int $Priority
 * @property 'ALLOW'|'BLOCK'|'ALERT' $Action
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListFirewallRulesRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupId: string,
     *     Priority?: int,
     *     Action?: 'ALLOW'|'BLOCK'|'ALERT',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
