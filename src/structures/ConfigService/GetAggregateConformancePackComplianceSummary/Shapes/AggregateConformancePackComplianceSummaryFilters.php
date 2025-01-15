<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConformancePackComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $AwsRegion
 */
class AggregateConformancePackComplianceSummaryFilters extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     AwsRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
