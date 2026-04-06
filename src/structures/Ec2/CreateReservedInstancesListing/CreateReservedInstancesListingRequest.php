<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property int $InstanceCount
 * @property list<Shapes\PriceScheduleSpecification> $PriceSchedules
 * @property string $ReservedInstancesId
 */
class CreateReservedInstancesListingRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     InstanceCount: int,
     *     PriceSchedules: list<Shapes\PriceScheduleSpecification>,
     *     ReservedInstancesId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
