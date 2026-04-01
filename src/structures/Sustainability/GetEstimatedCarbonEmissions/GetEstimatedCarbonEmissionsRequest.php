<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedCarbonEmissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TimePeriod $TimePeriod
 * @property list<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE'>|null $GroupBy
 * @property Shapes\FilterExpression|null $FilterBy
 * @property list<'TOTAL_LBM_CARBON_EMISSIONS'|'TOTAL_MBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_1_CARBON_EMISSIONS'|'TOTAL_SCOPE_2_LBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_2_MBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_3_LBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_3_MBM_CARBON_EMISSIONS'>|null $EmissionsTypes
 * @property 'YEARLY_CALENDAR'|'YEARLY_FISCAL'|'QUARTERLY_CALENDAR'|'QUARTERLY_FISCAL'|'MONTHLY'|null $Granularity
 * @property Shapes\GranularityConfiguration|null $GranularityConfiguration
 * @property int<1, 5000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetEstimatedCarbonEmissionsRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\TimePeriod,
     *     GroupBy?: list<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE'>|null,
     *     FilterBy?: Shapes\FilterExpression|null,
     *     EmissionsTypes?: list<'TOTAL_LBM_CARBON_EMISSIONS'|'TOTAL_MBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_1_CARBON_EMISSIONS'|'TOTAL_SCOPE_2_LBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_2_MBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_3_LBM_CARBON_EMISSIONS'|'TOTAL_SCOPE_3_MBM_CARBON_EMISSIONS'>|null,
     *     Granularity?: 'YEARLY_CALENDAR'|'YEARLY_FISCAL'|'QUARTERLY_CALENDAR'|'QUARTERLY_FISCAL'|'MONTHLY'|null,
     *     GranularityConfiguration?: Shapes\GranularityConfiguration|null,
     *     MaxResults?: int<1, 5000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
