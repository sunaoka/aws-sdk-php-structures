<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroupCostReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ListBillingGroupCostReportsFilter|null $Filters
 */
class ListBillingGroupCostReportsRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: Shapes\ListBillingGroupCostReportsFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
