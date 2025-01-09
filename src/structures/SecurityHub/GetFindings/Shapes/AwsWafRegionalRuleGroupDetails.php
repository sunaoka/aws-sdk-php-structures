<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Name
 * @property string $RuleGroupId
 * @property list<AwsWafRegionalRuleGroupRulesDetails> $Rules
 */
class AwsWafRegionalRuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Name?: string,
     *     RuleGroupId?: string,
     *     Rules?: list<AwsWafRegionalRuleGroupRulesDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
