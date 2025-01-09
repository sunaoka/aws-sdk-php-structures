<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConfigRuleComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $AwsRegion
 */
class ConfigRuleComplianceSummaryFilters extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     AwsRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
