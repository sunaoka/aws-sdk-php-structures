<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleGroupArn
 * @property string|null $RuleGroupType
 */
class RuleGroupTypePair extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn?: string|null,
     *     RuleGroupType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
