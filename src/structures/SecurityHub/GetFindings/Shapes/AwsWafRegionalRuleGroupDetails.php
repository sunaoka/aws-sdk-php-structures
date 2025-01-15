<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $Name
 * @property string|null $RuleGroupId
 * @property list<AwsWafRegionalRuleGroupRulesDetails>|null $Rules
 */
class AwsWafRegionalRuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Name?: string|null,
     *     RuleGroupId?: string|null,
     *     Rules?: list<AwsWafRegionalRuleGroupRulesDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
