<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAction;

trait DescribeActionTrait
{
    /**
     * @param DescribeActionRequest $args
     * @return DescribeActionResponse
     */
    public function describeAction(DescribeActionRequest $args)
    {
        $result = parent::describeAction($args->toArray());
        return new DescribeActionResponse($result->toArray());
    }
}
