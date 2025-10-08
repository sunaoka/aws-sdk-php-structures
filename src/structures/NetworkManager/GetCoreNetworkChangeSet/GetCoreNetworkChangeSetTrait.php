<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet;

trait GetCoreNetworkChangeSetTrait
{
    /**
     * @param GetCoreNetworkChangeSetRequest $args
     * @return GetCoreNetworkChangeSetResponse
     */
    public function getCoreNetworkChangeSet(GetCoreNetworkChangeSetRequest $args)
    {
        $result = parent::getCoreNetworkChangeSet($args->toArray());
        return new GetCoreNetworkChangeSetResponse($result->toArray());
    }
}
