<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkforce;

trait DescribeWorkforceTrait
{
    /**
     * @param DescribeWorkforceRequest $args
     * @return DescribeWorkforceResponse
     */
    public function describeWorkforce(DescribeWorkforceRequest $args)
    {
        $result = parent::describeWorkforce($args->toArray());
        return new DescribeWorkforceResponse($result->toArray());
    }
}
