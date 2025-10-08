<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor;

trait DescribePredictorTrait
{
    /**
     * @param DescribePredictorRequest $args
     * @return DescribePredictorResponse
     */
    public function describePredictor(DescribePredictorRequest $args)
    {
        $result = parent::describePredictor($args->toArray());
        return new DescribePredictorResponse($result->toArray());
    }
}
