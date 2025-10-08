<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeNotebookInstanceLifecycleConfig;

trait DescribeNotebookInstanceLifecycleConfigTrait
{
    /**
     * @param DescribeNotebookInstanceLifecycleConfigRequest $args
     * @return DescribeNotebookInstanceLifecycleConfigResponse
     */
    public function describeNotebookInstanceLifecycleConfig(DescribeNotebookInstanceLifecycleConfigRequest $args)
    {
        $result = parent::describeNotebookInstanceLifecycleConfig($args->toArray());
        return new DescribeNotebookInstanceLifecycleConfigResponse($result->toArray());
    }
}
