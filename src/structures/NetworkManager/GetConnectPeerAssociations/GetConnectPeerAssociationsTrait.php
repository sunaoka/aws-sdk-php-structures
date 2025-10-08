<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectPeerAssociations;

trait GetConnectPeerAssociationsTrait
{
    /**
     * @param GetConnectPeerAssociationsRequest $args
     * @return GetConnectPeerAssociationsResponse
     */
    public function getConnectPeerAssociations(GetConnectPeerAssociationsRequest $args)
    {
        $result = parent::getConnectPeerAssociations($args->toArray());
        return new GetConnectPeerAssociationsResponse($result->toArray());
    }
}
