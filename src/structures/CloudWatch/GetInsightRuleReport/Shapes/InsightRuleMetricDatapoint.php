<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property double $UniqueContributors
 * @property double $MaxContributorValue
 * @property double $SampleCount
 * @property double $Average
 * @property double $Sum
 * @property double $Minimum
 * @property double $Maximum
 */
class InsightRuleMetricDatapoint extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     UniqueContributors?: double,
     *     MaxContributorValue?: double,
     *     SampleCount?: double,
     *     Average?: double,
     *     Sum?: double,
     *     Minimum?: double,
     *     Maximum?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
