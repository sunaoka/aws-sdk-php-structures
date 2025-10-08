<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestExecution;

trait DescribeTestExecutionTrait
{
    /**
     * @param DescribeTestExecutionRequest $args
     * @return DescribeTestExecutionResponse
     */
    public function describeTestExecution(DescribeTestExecutionRequest $args)
    {
        $result = parent::describeTestExecution($args->toArray());
        return new DescribeTestExecutionResponse($result->toArray());
    }
}
