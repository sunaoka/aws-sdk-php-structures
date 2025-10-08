<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteSuppressedDestination;

trait DeleteSuppressedDestinationTrait
{
    /**
     * @param DeleteSuppressedDestinationRequest $args
     * @return DeleteSuppressedDestinationResponse
     */
    public function deleteSuppressedDestination(DeleteSuppressedDestinationRequest $args)
    {
        $result = parent::deleteSuppressedDestination($args->toArray());
        return new DeleteSuppressedDestinationResponse($result->toArray());
    }
}
