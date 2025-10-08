<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditTask;

trait DescribeAuditTaskTrait
{
    /**
     * @param DescribeAuditTaskRequest $args
     * @return DescribeAuditTaskResponse
     */
    public function describeAuditTask(DescribeAuditTaskRequest $args)
    {
        $result = parent::describeAuditTask($args->toArray());
        return new DescribeAuditTaskResponse($result->toArray());
    }
}
