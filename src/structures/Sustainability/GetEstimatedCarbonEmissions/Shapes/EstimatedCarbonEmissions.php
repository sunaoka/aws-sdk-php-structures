<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimePeriod $TimePeriod
 * @property array<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE', string> $DimensionsValues
 * @property string $ModelVersion
 * @property array<'TOTAL_LBM_CARBON_EMISSIONS'|'TOTAL_MBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_1_CARBON_EMISSIONS'|'TOTAL_SCOPE_2_LBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_2_MBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_3_LBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_3_MBM_CARBON_EMISSIONS', Emissions> $EmissionsValues
 */
class EstimatedCarbonEmissions extends Shape
{
    /**
     * @param array{
     *     TimePeriod: TimePeriod,
     *     DimensionsValues: array<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE', string>,
     *     ModelVersion: string,
     *     EmissionsValues: array<'TOTAL_LBM_CARBON_EMISSIONS'|'TOTAL_MBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_1_CARBON_EMISSIONS'|'TOTAL_SCOPE_2_LBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_2_MBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_3_LBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_3_MBM_CARBON_EMISSIONS', Emissions>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
