<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteImportedModel;

trait DeleteImportedModelTrait
{
    /**
     * @param DeleteImportedModelRequest $args
     * @return DeleteImportedModelResponse
     */
    public function deleteImportedModel(DeleteImportedModelRequest $args)
    {
        $result = parent::deleteImportedModel($args->toArray());
        return new DeleteImportedModelResponse($result->toArray());
    }
}
