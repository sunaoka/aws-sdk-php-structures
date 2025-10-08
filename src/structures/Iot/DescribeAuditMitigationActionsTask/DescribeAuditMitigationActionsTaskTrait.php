<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditMitigationActionsTask;

trait DescribeAuditMitigationActionsTaskTrait
{
    /**
     * @param DescribeAuditMitigationActionsTaskRequest $args
     * @return DescribeAuditMitigationActionsTaskResponse
     */
    public function describeAuditMitigationActionsTask(DescribeAuditMitigationActionsTaskRequest $args)
    {
        $result = parent::describeAuditMitigationActionsTask($args->toArray());
        return new DescribeAuditMitigationActionsTaskResponse($result->toArray());
    }
}
