<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeNotebookExecution;

trait DescribeNotebookExecutionTrait
{
    /**
     * @param DescribeNotebookExecutionRequest $args
     * @return DescribeNotebookExecutionResponse
     */
    public function describeNotebookExecution(DescribeNotebookExecutionRequest $args)
    {
        $result = parent::describeNotebookExecution($args->toArray());
        return new DescribeNotebookExecutionResponse($result->toArray());
    }
}
