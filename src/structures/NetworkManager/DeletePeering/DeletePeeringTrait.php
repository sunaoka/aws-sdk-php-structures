<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeletePeering;

trait DeletePeeringTrait
{
    /**
     * @param DeletePeeringRequest $args
     * @return DeletePeeringResponse
     */
    public function deletePeering(DeletePeeringRequest $args)
    {
        $result = parent::deletePeering($args->toArray());
        return new DeletePeeringResponse($result->toArray());
    }
}
