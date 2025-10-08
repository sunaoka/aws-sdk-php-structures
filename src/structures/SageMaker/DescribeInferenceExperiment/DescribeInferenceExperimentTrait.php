<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment;

trait DescribeInferenceExperimentTrait
{
    /**
     * @param DescribeInferenceExperimentRequest $args
     * @return DescribeInferenceExperimentResponse
     */
    public function describeInferenceExperiment(DescribeInferenceExperimentRequest $args)
    {
        $result = parent::describeInferenceExperiment($args->toArray());
        return new DescribeInferenceExperimentResponse($result->toArray());
    }
}
