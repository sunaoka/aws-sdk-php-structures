<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DeleteModel;

trait DeleteModelTrait
{
    /**
     * @param DeleteModelRequest $args
     * @return DeleteModelResponse
     */
    public function deleteModel(DeleteModelRequest $args)
    {
        $result = parent::deleteModel($args->toArray());
        return new DeleteModelResponse($result->toArray());
    }
}
