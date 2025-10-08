<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteMLModel;

trait DeleteMLModelTrait
{
    /**
     * @param DeleteMLModelRequest $args
     * @return DeleteMLModelResponse
     */
    public function deleteMLModel(DeleteMLModelRequest $args)
    {
        $result = parent::deleteMLModel($args->toArray());
        return new DeleteMLModelResponse($result->toArray());
    }
}
