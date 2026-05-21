<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateDatasetExamples;

trait UpdateDatasetExamplesTrait
{
    /**
     * @param UpdateDatasetExamplesRequest $args
     * @return UpdateDatasetExamplesResponse
     */
    public function updateDatasetExamples(UpdateDatasetExamplesRequest $args)
    {
        $result = parent::updateDatasetExamples($args->toArray());
        return new UpdateDatasetExamplesResponse($result->toArray());
    }
}
