<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListDatasetGenerations;

trait ListDatasetGenerationsTrait
{
    /**
     * @param ListDatasetGenerationsRequest $args
     * @return ListDatasetGenerationsResponse
     */
    public function listDatasetGenerations(ListDatasetGenerationsRequest $args)
    {
        $result = parent::listDatasetGenerations($args->toArray());
        return new ListDatasetGenerationsResponse($result->toArray());
    }
}
