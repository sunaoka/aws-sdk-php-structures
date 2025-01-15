<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property double|null $UniqueContributors
 * @property double|null $MaxContributorValue
 * @property double|null $SampleCount
 * @property double|null $Average
 * @property double|null $Sum
 * @property double|null $Minimum
 * @property double|null $Maximum
 */
class InsightRuleMetricDatapoint extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     UniqueContributors?: double|null,
     *     MaxContributorValue?: double|null,
     *     SampleCount?: double|null,
     *     Average?: double|null,
     *     Sum?: double|null,
     *     Minimum?: double|null,
     *     Maximum?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
