<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceRelationships;

trait GetNetworkResourceRelationshipsTrait
{
    /**
     * @param GetNetworkResourceRelationshipsRequest $args
     * @return GetNetworkResourceRelationshipsResponse
     */
    public function getNetworkResourceRelationships(GetNetworkResourceRelationshipsRequest $args)
    {
        $result = parent::getNetworkResourceRelationships($args->toArray());
        return new GetNetworkResourceRelationshipsResponse($result->toArray());
    }
}
