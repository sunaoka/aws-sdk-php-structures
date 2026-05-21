<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\AddDatasetExamples;

trait AddDatasetExamplesTrait
{
    /**
     * @param AddDatasetExamplesRequest $args
     * @return AddDatasetExamplesResponse
     */
    public function addDatasetExamples(AddDatasetExamplesRequest $args)
    {
        $result = parent::addDatasetExamples($args->toArray());
        return new AddDatasetExamplesResponse($result->toArray());
    }
}
