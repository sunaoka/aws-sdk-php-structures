<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Keys
 * @property double $ApproximateAggregateValue
 * @property list<InsightRuleContributorDatapoint> $Datapoints
 */
class InsightRuleContributor extends Shape
{
    /**
     * @param array{
     *     Keys: list<string>,
     *     ApproximateAggregateValue: double,
     *     Datapoints: list<InsightRuleContributorDatapoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
