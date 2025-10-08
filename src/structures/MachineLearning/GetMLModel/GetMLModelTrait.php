<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetMLModel;

trait GetMLModelTrait
{
    /**
     * @param GetMLModelRequest $args
     * @return GetMLModelResponse
     */
    public function getMLModel(GetMLModelRequest $args)
    {
        $result = parent::getMLModel($args->toArray());
        return new GetMLModelResponse($result->toArray());
    }
}
