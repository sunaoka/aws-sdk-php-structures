<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration;

trait StartDatasetGenerationTrait
{
    /**
     * @param StartDatasetGenerationRequest $args
     * @return StartDatasetGenerationResponse
     */
    public function startDatasetGeneration(StartDatasetGenerationRequest $args)
    {
        $result = parent::startDatasetGeneration($args->toArray());
        return new StartDatasetGenerationResponse($result->toArray());
    }
}
