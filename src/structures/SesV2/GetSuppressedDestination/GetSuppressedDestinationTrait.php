<?php

namespace Sunaoka\Aws\Structures\SesV2\GetSuppressedDestination;

trait GetSuppressedDestinationTrait
{
    /**
     * @param GetSuppressedDestinationRequest $args
     * @return GetSuppressedDestinationResponse
     */
    public function getSuppressedDestination(GetSuppressedDestinationRequest $args)
    {
        $result = parent::getSuppressedDestination($args->toArray());
        return new GetSuppressedDestinationResponse($result->toArray());
    }
}
