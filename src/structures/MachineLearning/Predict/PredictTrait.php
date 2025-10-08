<?php

namespace Sunaoka\Aws\Structures\MachineLearning\Predict;

trait PredictTrait
{
    /**
     * @param PredictRequest $args
     * @return PredictResponse
     */
    public function predict(PredictRequest $args)
    {
        $result = parent::predict($args->toArray());
        return new PredictResponse($result->toArray());
    }
}
