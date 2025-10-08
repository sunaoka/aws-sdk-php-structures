<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDetectMitigationActionsTask;

trait DescribeDetectMitigationActionsTaskTrait
{
    /**
     * @param DescribeDetectMitigationActionsTaskRequest $args
     * @return DescribeDetectMitigationActionsTaskResponse
     */
    public function describeDetectMitigationActionsTask(DescribeDetectMitigationActionsTaskRequest $args)
    {
        $result = parent::describeDetectMitigationActionsTask($args->toArray());
        return new DescribeDetectMitigationActionsTaskResponse($result->toArray());
    }
}
