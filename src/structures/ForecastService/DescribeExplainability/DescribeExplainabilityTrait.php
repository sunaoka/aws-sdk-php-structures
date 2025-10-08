<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainability;

trait DescribeExplainabilityTrait
{
    /**
     * @param DescribeExplainabilityRequest $args
     * @return DescribeExplainabilityResponse
     */
    public function describeExplainability(DescribeExplainabilityRequest $args)
    {
        $result = parent::describeExplainability($args->toArray());
        return new DescribeExplainabilityResponse($result->toArray());
    }
}
