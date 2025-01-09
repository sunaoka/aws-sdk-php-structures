<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Name
 * @property list<AwsWafRegionalRulePredicateListDetails> $PredicateList
 * @property string $RuleId
 */
class AwsWafRegionalRuleDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Name?: string,
     *     PredicateList?: list<AwsWafRegionalRulePredicateListDetails>,
     *     RuleId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
