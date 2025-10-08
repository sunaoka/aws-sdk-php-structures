<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModels;

trait ListFoundationModelsTrait
{
    /**
     * @param ListFoundationModelsRequest $args
     * @return ListFoundationModelsResponse
     */
    public function listFoundationModels(ListFoundationModelsRequest $args)
    {
        $result = parent::listFoundationModels($args->toArray());
        return new ListFoundationModelsResponse($result->toArray());
    }
}
