<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAPIModels;

trait GetBackendAPIModelsTrait
{
    /**
     * @param GetBackendAPIModelsRequest $args
     * @return GetBackendAPIModelsResponse
     */
    public function getBackendAPIModels(GetBackendAPIModelsRequest $args)
    {
        $result = parent::getBackendAPIModels($args->toArray());
        return new GetBackendAPIModelsResponse($result->toArray());
    }
}
