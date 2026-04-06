<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleGroupName
 * @property string|null $RuleGroupArn
 * @property 'STATELESS'|'STATEFUL'|null $Type
 * @property bool|null $AnalyzeRuleGroup
 */
class DescribeRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupName?: string|null,
     *     RuleGroupArn?: string|null,
     *     Type?: 'STATELESS'|'STATEFUL'|null,
     *     AnalyzeRuleGroup?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
