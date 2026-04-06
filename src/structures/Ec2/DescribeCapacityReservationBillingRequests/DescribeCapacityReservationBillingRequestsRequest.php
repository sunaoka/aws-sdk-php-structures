<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationBillingRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CapacityReservationIds
 * @property 'odcr-owner'|'unused-reservation-billing-owner' $Role
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeCapacityReservationBillingRequestsRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationIds?: list<string>|null,
     *     Role: 'odcr-owner'|'unused-reservation-billing-owner',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
