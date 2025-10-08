<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeApp;

trait DescribeAppTrait
{
    /**
     * @param DescribeAppRequest $args
     * @return DescribeAppResponse
     */
    public function describeApp(DescribeAppRequest $args)
    {
        $result = parent::describeApp($args->toArray());
        return new DescribeAppResponse($result->toArray());
    }
}
