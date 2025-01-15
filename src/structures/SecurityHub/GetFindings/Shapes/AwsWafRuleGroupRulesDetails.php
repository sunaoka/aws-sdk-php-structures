<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafRuleGroupRulesActionDetails|null $Action
 * @property int|null $Priority
 * @property string|null $RuleId
 * @property string|null $Type
 */
class AwsWafRuleGroupRulesDetails extends Shape
{
    /**
     * @param array{
     *     Action?: AwsWafRuleGroupRulesActionDetails|null,
     *     Priority?: int|null,
     *     RuleId?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
