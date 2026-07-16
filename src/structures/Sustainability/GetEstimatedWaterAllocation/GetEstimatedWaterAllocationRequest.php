<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedWaterAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TimePeriod $TimePeriod
 * @property list<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE'>|null $GroupBy
 * @property Shapes\FilterExpression|null $FilterBy
 * @property list<'TOTAL_WATER_WITHDRAWALS'>|null $AllocationTypes
 * @property 'YEARLY_CALENDAR'|'YEARLY_FISCAL'|'QUARTERLY_CALENDAR'|'QUARTERLY_FISCAL'|'MONTHLY'|null $Granularity
 * @property int<1, 5000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetEstimatedWaterAllocationRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\TimePeriod,
     *     GroupBy?: list<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE'>|null,
     *     FilterBy?: Shapes\FilterExpression|null,
     *     AllocationTypes?: list<'TOTAL_WATER_WITHDRAWALS'>|null,
     *     Granularity?: 'YEARLY_CALENDAR'|'YEARLY_FISCAL'|'QUARTERLY_CALENDAR'|'QUARTERLY_FISCAL'|'MONTHLY'|null,
     *     MaxResults?: int<1, 5000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
