<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedInstancesId
 * @property int $InstanceCount
 * @property list<Shapes\PriceScheduleSpecification> $PriceSchedules
 * @property string $ClientToken
 */
class CreateReservedInstancesListingRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstancesId: string,
     *     InstanceCount: int,
     *     PriceSchedules: list<Shapes\PriceScheduleSpecification>,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
