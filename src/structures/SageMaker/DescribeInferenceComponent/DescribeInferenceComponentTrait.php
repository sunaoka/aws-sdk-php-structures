<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent;

trait DescribeInferenceComponentTrait
{
    /**
     * @param DescribeInferenceComponentRequest $args
     * @return DescribeInferenceComponentResponse
     */
    public function describeInferenceComponent(DescribeInferenceComponentRequest $args)
    {
        $result = parent::describeInferenceComponent($args->toArray());
        return new DescribeInferenceComponentResponse($result->toArray());
    }
}
