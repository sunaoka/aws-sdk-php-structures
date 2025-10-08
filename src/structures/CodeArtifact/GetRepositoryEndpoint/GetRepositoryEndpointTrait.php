<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetRepositoryEndpoint;

trait GetRepositoryEndpointTrait
{
    /**
     * @param GetRepositoryEndpointRequest $args
     * @return GetRepositoryEndpointResponse
     */
    public function getRepositoryEndpoint(GetRepositoryEndpointRequest $args)
    {
        $result = parent::getRepositoryEndpoint($args->toArray());
        return new GetRepositoryEndpointResponse($result->toArray());
    }
}
