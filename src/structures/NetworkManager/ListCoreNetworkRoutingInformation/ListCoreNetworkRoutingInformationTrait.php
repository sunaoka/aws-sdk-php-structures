<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkRoutingInformation;

trait ListCoreNetworkRoutingInformationTrait
{
    /**
     * @param ListCoreNetworkRoutingInformationRequest $args
     * @return ListCoreNetworkRoutingInformationResponse
     */
    public function listCoreNetworkRoutingInformation(ListCoreNetworkRoutingInformationRequest $args)
    {
        $result = parent::listCoreNetworkRoutingInformation($args->toArray());
        return new ListCoreNetworkRoutingInformationResponse($result->toArray());
    }
}
