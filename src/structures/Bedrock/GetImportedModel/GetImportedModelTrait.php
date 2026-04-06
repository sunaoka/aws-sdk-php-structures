<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetImportedModel;

trait GetImportedModelTrait
{
    /**
     * @param GetImportedModelRequest $args
     * @return GetImportedModelResponse
     */
    public function getImportedModel(GetImportedModelRequest $args)
    {
        $result = parent::getImportedModel($args->toArray());
        return new GetImportedModelResponse($result->toArray());
    }
}
