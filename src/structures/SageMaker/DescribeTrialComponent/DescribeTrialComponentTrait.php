<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrialComponent;

trait DescribeTrialComponentTrait
{
    /**
     * @param DescribeTrialComponentRequest $args
     * @return DescribeTrialComponentResponse
     */
    public function describeTrialComponent(DescribeTrialComponentRequest $args)
    {
        $result = parent::describeTrialComponent($args->toArray());
        return new DescribeTrialComponentResponse($result->toArray());
    }
}
