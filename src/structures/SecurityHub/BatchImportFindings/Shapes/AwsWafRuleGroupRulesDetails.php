<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafRuleGroupRulesActionDetails $Action
 * @property int $Priority
 * @property string $RuleId
 * @property string $Type
 */
class AwsWafRuleGroupRulesDetails extends Shape
{
    /**
     * @param array{
     *     Action?: AwsWafRuleGroupRulesActionDetails,
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
