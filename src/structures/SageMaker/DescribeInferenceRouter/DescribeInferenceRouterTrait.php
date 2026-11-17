<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRouter;

trait DescribeInferenceRouterTrait
{
    /**
     * @param DescribeInferenceRouterRequest $args
     * @return DescribeInferenceRouterResponse
     */
    public function describeInferenceRouter(DescribeInferenceRouterRequest $args)
    {
        $result = parent::describeInferenceRouter($args->toArray());
        return new DescribeInferenceRouterResponse($result->toArray());
    }
}
