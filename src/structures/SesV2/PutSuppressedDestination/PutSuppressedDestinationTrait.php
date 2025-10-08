<?php

namespace Sunaoka\Aws\Structures\SesV2\PutSuppressedDestination;

trait PutSuppressedDestinationTrait
{
    /**
     * @param PutSuppressedDestinationRequest $args
     * @return PutSuppressedDestinationResponse
     */
    public function putSuppressedDestination(PutSuppressedDestinationRequest $args)
    {
        $result = parent::putSuppressedDestination($args->toArray());
        return new PutSuppressedDestinationResponse($result->toArray());
    }
}
