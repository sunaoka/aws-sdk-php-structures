<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesListings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedInstancesId
 * @property string|null $ReservedInstancesListingId
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeReservedInstancesListingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstancesId?: string|null,
     *     ReservedInstancesListingId?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
