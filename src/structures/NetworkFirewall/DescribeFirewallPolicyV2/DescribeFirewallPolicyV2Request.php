<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicyV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallPolicyV2Arn
 * @property string|null $FirewallPolicyV2Name
 * @property 'FIREWALL_RULES'|'RULES_STRING'|null $RuleOutputFormat
 */
class DescribeFirewallPolicyV2Request extends Request
{
    /**
     * @param array{
     *     FirewallPolicyV2Arn?: string|null,
     *     FirewallPolicyV2Name?: string|null,
     *     RuleOutputFormat?: 'FIREWALL_RULES'|'RULES_STRING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
