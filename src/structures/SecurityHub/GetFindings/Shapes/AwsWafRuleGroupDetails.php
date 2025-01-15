<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $Name
 * @property string|null $RuleGroupId
 * @property list<AwsWafRuleGroupRulesDetails>|null $Rules
 */
class AwsWafRuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Name?: string|null,
     *     RuleGroupId?: string|null,
     *     Rules?: list<AwsWafRuleGroupRulesDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
