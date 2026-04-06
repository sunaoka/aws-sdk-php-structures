<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesListings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $ReservedInstancesId
 * @property string|null $ReservedInstancesListingId
 */
class DescribeReservedInstancesListingsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     ReservedInstancesId?: string|null,
     *     ReservedInstancesListingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
