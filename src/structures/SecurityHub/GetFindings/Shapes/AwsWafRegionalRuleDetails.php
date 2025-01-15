<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $Name
 * @property list<AwsWafRegionalRulePredicateListDetails>|null $PredicateList
 * @property string|null $RuleId
 */
class AwsWafRegionalRuleDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Name?: string|null,
     *     PredicateList?: list<AwsWafRegionalRulePredicateListDetails>|null,
     *     RuleId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
