<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupArn
 * @property string $RuleGroupType
 */
class RuleGroupTypePair extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn?: string,
     *     RuleGroupType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
