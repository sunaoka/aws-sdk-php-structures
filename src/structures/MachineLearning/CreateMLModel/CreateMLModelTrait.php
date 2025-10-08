<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateMLModel;

trait CreateMLModelTrait
{
    /**
     * @param CreateMLModelRequest $args
     * @return CreateMLModelResponse
     */
    public function createMLModel(CreateMLModelRequest $args)
    {
        $result = parent::createMLModel($args->toArray());
        return new CreateMLModelResponse($result->toArray());
    }
}
