<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListImportedModels;

trait ListImportedModelsTrait
{
    /**
     * @param ListImportedModelsRequest $args
     * @return ListImportedModelsResponse
     */
    public function listImportedModels(ListImportedModelsRequest $args)
    {
        $result = parent::listImportedModels($args->toArray());
        return new ListImportedModelsResponse($result->toArray());
    }
}
