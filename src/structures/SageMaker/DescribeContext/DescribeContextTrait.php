<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeContext;

trait DescribeContextTrait
{
    /**
     * @param DescribeContextRequest $args
     * @return DescribeContextResponse
     */
    public function describeContext(DescribeContextRequest $args)
    {
        $result = parent::describeContext($args->toArray());
        return new DescribeContextResponse($result->toArray());
    }
}
