<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property IpsRuleGroup|null $InlineRuleGroup
 * @property IpsRuleGroupOverride|null $Override
 */
class IpsRuleGroupEntry extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     InlineRuleGroup?: IpsRuleGroup|null,
     *     Override?: IpsRuleGroupOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
