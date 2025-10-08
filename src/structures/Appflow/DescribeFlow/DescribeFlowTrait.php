<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow;

trait DescribeFlowTrait
{
    /**
     * @param DescribeFlowRequest $args
     * @return DescribeFlowResponse
     */
    public function describeFlow(DescribeFlowRequest $args)
    {
        $result = parent::describeFlow($args->toArray());
        return new DescribeFlowResponse($result->toArray());
    }
}
