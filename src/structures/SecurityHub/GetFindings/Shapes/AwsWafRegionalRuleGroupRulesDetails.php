<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafRegionalRuleGroupRulesActionDetails $Action
 * @property int $Priority
 * @property string $RuleId
 * @property string $Type
 */
class AwsWafRegionalRuleGroupRulesDetails extends Shape
{
    /**
     * @param array{
     *     Action?: AwsWafRegionalRuleGroupRulesActionDetails,
     *     Priority?: int,
     *     RuleId?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
