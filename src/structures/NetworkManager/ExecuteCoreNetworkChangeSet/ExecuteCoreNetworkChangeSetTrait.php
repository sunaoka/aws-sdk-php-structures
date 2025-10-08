<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ExecuteCoreNetworkChangeSet;

trait ExecuteCoreNetworkChangeSetTrait
{
    /**
     * @param ExecuteCoreNetworkChangeSetRequest $args
     * @return ExecuteCoreNetworkChangeSetResponse
     */
    public function executeCoreNetworkChangeSet(ExecuteCoreNetworkChangeSetRequest $args)
    {
        $result = parent::executeCoreNetworkChangeSet($args->toArray());
        return new ExecuteCoreNetworkChangeSetResponse($result->toArray());
    }
}
