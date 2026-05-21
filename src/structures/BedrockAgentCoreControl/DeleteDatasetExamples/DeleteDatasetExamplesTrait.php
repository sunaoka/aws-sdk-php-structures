<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteDatasetExamples;

trait DeleteDatasetExamplesTrait
{
    /**
     * @param DeleteDatasetExamplesRequest $args
     * @return DeleteDatasetExamplesResponse
     */
    public function deleteDatasetExamples(DeleteDatasetExamplesRequest $args)
    {
        $result = parent::deleteDatasetExamples($args->toArray());
        return new DeleteDatasetExamplesResponse($result->toArray());
    }
}
