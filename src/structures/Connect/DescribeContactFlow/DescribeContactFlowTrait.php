<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactFlow;

trait DescribeContactFlowTrait
{
    /**
     * @param DescribeContactFlowRequest $args
     * @return DescribeContactFlowResponse
     */
    public function describeContactFlow(DescribeContactFlowRequest $args)
    {
        $result = parent::describeContactFlow($args->toArray());
        return new DescribeContactFlowResponse($result->toArray());
    }
}
