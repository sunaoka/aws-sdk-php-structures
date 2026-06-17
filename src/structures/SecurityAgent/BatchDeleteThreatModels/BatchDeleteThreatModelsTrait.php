<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDeleteThreatModels;

trait BatchDeleteThreatModelsTrait
{
    /**
     * @param BatchDeleteThreatModelsRequest $args
     * @return BatchDeleteThreatModelsResponse
     */
    public function batchDeleteThreatModels(BatchDeleteThreatModelsRequest $args)
    {
        $result = parent::batchDeleteThreatModels($args->toArray());
        return new BatchDeleteThreatModelsResponse($result->toArray());
    }
}
