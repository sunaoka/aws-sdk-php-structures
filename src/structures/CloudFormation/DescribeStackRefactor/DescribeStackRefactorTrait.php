<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackRefactor;

trait DescribeStackRefactorTrait
{
    /**
     * @param DescribeStackRefactorRequest $args
     * @return DescribeStackRefactorResponse
     */
    public function describeStackRefactor(DescribeStackRefactorRequest $args)
    {
        $result = parent::describeStackRefactor($args->toArray());
        return new DescribeStackRefactorResponse($result->toArray());
    }
}
