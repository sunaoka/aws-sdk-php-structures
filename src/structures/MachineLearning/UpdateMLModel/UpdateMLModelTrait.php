<?php

namespace Sunaoka\Aws\Structures\MachineLearning\UpdateMLModel;

trait UpdateMLModelTrait
{
    /**
     * @param UpdateMLModelRequest $args
     * @return UpdateMLModelResponse
     */
    public function updateMLModel(UpdateMLModelRequest $args)
    {
        $result = parent::updateMLModel($args->toArray());
        return new UpdateMLModelResponse($result->toArray());
    }
}
