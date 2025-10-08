<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrial;

trait DescribeTrialTrait
{
    /**
     * @param DescribeTrialRequest $args
     * @return DescribeTrialResponse
     */
    public function describeTrial(DescribeTrialRequest $args)
    {
        $result = parent::describeTrial($args->toArray());
        return new DescribeTrialResponse($result->toArray());
    }
}
