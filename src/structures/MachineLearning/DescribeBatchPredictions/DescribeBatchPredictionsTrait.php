<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeBatchPredictions;

trait DescribeBatchPredictionsTrait
{
    /**
     * @param DescribeBatchPredictionsRequest $args
     * @return DescribeBatchPredictionsResponse
     */
    public function describeBatchPredictions(DescribeBatchPredictionsRequest $args)
    {
        $result = parent::describeBatchPredictions($args->toArray());
        return new DescribeBatchPredictionsResponse($result->toArray());
    }
}
