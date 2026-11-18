<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration;

trait GetDatasetGenerationTrait
{
    /**
     * @param GetDatasetGenerationRequest $args
     * @return GetDatasetGenerationResponse
     */
    public function getDatasetGeneration(GetDatasetGenerationRequest $args)
    {
        $result = parent::getDatasetGeneration($args->toArray());
        return new GetDatasetGenerationResponse($result->toArray());
    }
}
