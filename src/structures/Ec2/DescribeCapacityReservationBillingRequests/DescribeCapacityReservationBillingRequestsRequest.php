<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationBillingRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CapacityReservationIds
 * @property 'odcr-owner'|'unused-reservation-billing-owner' $Role
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeCapacityReservationBillingRequestsRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationIds?: list<string>,
     *     Role: 'odcr-owner'|'unused-reservation-billing-owner',
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
