<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetExamples;

trait ListDatasetExamplesTrait
{
    /**
     * @param ListDatasetExamplesRequest $args
     * @return ListDatasetExamplesResponse
     */
    public function listDatasetExamples(ListDatasetExamplesRequest $args)
    {
        $result = parent::listDatasetExamples($args->toArray());
        return new ListDatasetExamplesResponse($result->toArray());
    }
}
