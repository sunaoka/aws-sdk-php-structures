<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModels;

trait BatchGetThreatModelsTrait
{
    /**
     * @param BatchGetThreatModelsRequest $args
     * @return BatchGetThreatModelsResponse
     */
    public function batchGetThreatModels(BatchGetThreatModelsRequest $args)
    {
        $result = parent::batchGetThreatModels($args->toArray());
        return new BatchGetThreatModelsResponse($result->toArray());
    }
}
