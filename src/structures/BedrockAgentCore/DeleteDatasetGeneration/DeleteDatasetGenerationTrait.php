<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteDatasetGeneration;

trait DeleteDatasetGenerationTrait
{
    /**
     * @param DeleteDatasetGenerationRequest $args
     * @return DeleteDatasetGenerationResponse
     */
    public function deleteDatasetGeneration(DeleteDatasetGenerationRequest $args)
    {
        $result = parent::deleteDatasetGeneration($args->toArray());
        return new DeleteDatasetGenerationResponse($result->toArray());
    }
}
