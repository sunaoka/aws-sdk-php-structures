<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Name
 * @property list<AwsWafRulePredicateListDetails> $PredicateList
 * @property string $RuleId
 */
class AwsWafRuleDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Name?: string,
     *     PredicateList?: list<AwsWafRulePredicateListDetails>,
     *     RuleId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
