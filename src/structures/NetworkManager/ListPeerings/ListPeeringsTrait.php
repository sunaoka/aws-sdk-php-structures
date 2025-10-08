<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListPeerings;

trait ListPeeringsTrait
{
    /**
     * @param ListPeeringsRequest $args
     * @return ListPeeringsResponse
     */
    public function listPeerings(ListPeeringsRequest $args)
    {
        $result = parent::listPeerings($args->toArray());
        return new ListPeeringsResponse($result->toArray());
    }
}
