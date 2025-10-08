<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteCustomModel;

trait DeleteCustomModelTrait
{
    /**
     * @param DeleteCustomModelRequest $args
     * @return DeleteCustomModelResponse
     */
    public function deleteCustomModel(DeleteCustomModelRequest $args)
    {
        $result = parent::deleteCustomModel($args->toArray());
        return new DeleteCustomModelResponse($result->toArray());
    }
}
