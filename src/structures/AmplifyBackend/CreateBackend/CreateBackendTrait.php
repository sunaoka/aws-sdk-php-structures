<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackend;

trait CreateBackendTrait
{
    /**
     * @param CreateBackendRequest $args
     * @return CreateBackendResponse
     */
    public function createBackend(CreateBackendRequest $args)
    {
        $result = parent::createBackend($args->toArray());
        return new CreateBackendResponse($result->toArray());
    }
}
