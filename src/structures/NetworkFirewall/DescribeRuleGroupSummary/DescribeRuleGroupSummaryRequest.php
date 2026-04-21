<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroupSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleGroupName
 * @property string|null $RuleGroupArn
 * @property 'STATELESS'|'STATEFUL'|'STATEFUL_DOMAIN'|null $Type
 */
class DescribeRuleGroupSummaryRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupName?: string|null,
     *     RuleGroupArn?: string|null,
     *     Type?: 'STATELESS'|'STATEFUL'|'STATEFUL_DOMAIN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
