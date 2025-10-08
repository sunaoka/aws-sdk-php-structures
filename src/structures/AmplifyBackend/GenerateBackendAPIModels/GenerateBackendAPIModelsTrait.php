<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GenerateBackendAPIModels;

trait GenerateBackendAPIModelsTrait
{
    /**
     * @param GenerateBackendAPIModelsRequest $args
     * @return GenerateBackendAPIModelsResponse
     */
    public function generateBackendAPIModels(GenerateBackendAPIModelsRequest $args)
    {
        $result = parent::generateBackendAPIModels($args->toArray());
        return new GenerateBackendAPIModelsResponse($result->toArray());
    }
}
