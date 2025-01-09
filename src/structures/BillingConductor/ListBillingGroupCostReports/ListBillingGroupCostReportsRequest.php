<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroupCostReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\ListBillingGroupCostReportsFilter $Filters
 */
class ListBillingGroupCostReportsRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Filters?: Shapes\ListBillingGroupCostReportsFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
