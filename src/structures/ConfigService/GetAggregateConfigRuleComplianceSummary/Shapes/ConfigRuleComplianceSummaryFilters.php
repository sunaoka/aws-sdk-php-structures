<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConfigRuleComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $AwsRegion
 */
class ConfigRuleComplianceSummaryFilters extends Shape
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
