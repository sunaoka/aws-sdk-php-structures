<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep;

trait DescribeStepTrait
{
    /**
     * @param DescribeStepRequest $args
     * @return DescribeStepResponse
     */
    public function describeStep(DescribeStepRequest $args)
    {
        $result = parent::describeStep($args->toArray());
        return new DescribeStepResponse($result->toArray());
    }
}
