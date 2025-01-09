<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupArn
 * @property list<RuleOption> $RuleOptions
 */
class RuleGroupRuleOptionsPair extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn?: string,
     *     RuleOptions?: list<RuleOption>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
