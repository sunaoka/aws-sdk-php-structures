<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeNotebookInstance;

trait DescribeNotebookInstanceTrait
{
    /**
     * @param DescribeNotebookInstanceRequest $args
     * @return DescribeNotebookInstanceResponse
     */
    public function describeNotebookInstance(DescribeNotebookInstanceRequest $args)
    {
        $result = parent::describeNotebookInstance($args->toArray());
        return new DescribeNotebookInstanceResponse($result->toArray());
    }
}
