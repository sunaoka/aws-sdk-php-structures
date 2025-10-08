<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor;

trait DescribeAutoPredictorTrait
{
    /**
     * @param DescribeAutoPredictorRequest $args
     * @return DescribeAutoPredictorResponse
     */
    public function describeAutoPredictor(DescribeAutoPredictorRequest $args)
    {
        $result = parent::describeAutoPredictor($args->toArray());
        return new DescribeAutoPredictorResponse($result->toArray());
    }
}
