<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ListBillingGroupsFilter|null $Filters
 */
class ListBillingGroupsRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: Shapes\ListBillingGroupsFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
