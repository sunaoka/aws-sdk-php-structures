<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleGroupArn
 * @property list<RuleOption>|null $RuleOptions
 */
class RuleGroupRuleOptionsPair extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn?: string|null,
     *     RuleOptions?: list<RuleOption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
