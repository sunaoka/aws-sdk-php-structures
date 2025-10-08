<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelReservedInstancesListing;

trait CancelReservedInstancesListingTrait
{
    /**
     * @param CancelReservedInstancesListingRequest $args
     * @return CancelReservedInstancesListingResponse
     */
    public function cancelReservedInstancesListing(CancelReservedInstancesListingRequest $args)
    {
        $result = parent::cancelReservedInstancesListing($args->toArray());
        return new CancelReservedInstancesListingResponse($result->toArray());
    }
}
