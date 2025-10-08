<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackend;

trait GetBackendTrait
{
    /**
     * @param GetBackendRequest $args
     * @return GetBackendResponse
     */
    public function getBackend(GetBackendRequest $args)
    {
        $result = parent::getBackend($args->toArray());
        return new GetBackendResponse($result->toArray());
    }
}
