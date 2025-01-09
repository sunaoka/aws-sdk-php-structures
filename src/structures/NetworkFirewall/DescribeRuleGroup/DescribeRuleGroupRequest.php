<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupName
 * @property string $RuleGroupArn
 * @property 'STATELESS'|'STATEFUL' $Type
 * @property bool $AnalyzeRuleGroup
 */
class DescribeRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupName?: string,
     *     RuleGroupArn?: string,
     *     Type?: 'STATELESS'|'STATEFUL',
     *     AnalyzeRuleGroup?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
