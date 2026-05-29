<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFirewallRuleTypesRequest extends Request
{
    /**
     * @param array{
     *     RuleType?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
