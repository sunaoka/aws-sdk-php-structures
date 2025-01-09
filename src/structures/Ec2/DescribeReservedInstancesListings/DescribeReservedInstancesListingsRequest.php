<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesListings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedInstancesId
 * @property string $ReservedInstancesListingId
 * @property list<Shapes\Filter> $Filters
 */
class DescribeReservedInstancesListingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstancesId?: string,
     *     ReservedInstancesListingId?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
