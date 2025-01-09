<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property double $ApproximateValue
 */
class InsightRuleContributorDatapoint extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     ApproximateValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
