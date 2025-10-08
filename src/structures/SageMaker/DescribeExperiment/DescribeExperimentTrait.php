<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeExperiment;

trait DescribeExperimentTrait
{
    /**
     * @param DescribeExperimentRequest $args
     * @return DescribeExperimentResponse
     */
    public function describeExperiment(DescribeExperimentRequest $args)
    {
        $result = parent::describeExperiment($args->toArray());
        return new DescribeExperimentResponse($result->toArray());
    }
}
