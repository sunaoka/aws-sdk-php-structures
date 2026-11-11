<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleGroupName
 * @property string|null $RuleGroupArn
 * @property 'STATELESS'|'STATEFUL'|'STATEFUL_DOMAIN'|'FIREWALL'|'IPS'|null $Type
 * @property bool|null $AnalyzeRuleGroup
 * @property 'FIREWALL_RULES'|'RULES_STRING'|null $RuleOutputFormat
 */
class DescribeRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupName?: string|null,
     *     RuleGroupArn?: string|null,
     *     Type?: 'STATELESS'|'STATEFUL'|'STATEFUL_DOMAIN'|'FIREWALL'|'IPS'|null,
     *     AnalyzeRuleGroup?: bool|null,
     *     RuleOutputFormat?: 'FIREWALL_RULES'|'RULES_STRING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
