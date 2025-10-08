<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditFinding;

trait DescribeAuditFindingTrait
{
    /**
     * @param DescribeAuditFindingRequest $args
     * @return DescribeAuditFindingResponse
     */
    public function describeAuditFinding(DescribeAuditFindingRequest $args)
    {
        $result = parent::describeAuditFinding($args->toArray());
        return new DescribeAuditFindingResponse($result->toArray());
    }
}
