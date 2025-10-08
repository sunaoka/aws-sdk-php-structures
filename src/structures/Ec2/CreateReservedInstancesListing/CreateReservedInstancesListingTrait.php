<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing;

trait CreateReservedInstancesListingTrait
{
    /**
     * @param CreateReservedInstancesListingRequest $args
     * @return CreateReservedInstancesListingResponse
     */
    public function createReservedInstancesListing(CreateReservedInstancesListingRequest $args)
    {
        $result = parent::createReservedInstancesListing($args->toArray());
        return new CreateReservedInstancesListingResponse($result->toArray());
    }
}
