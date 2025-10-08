<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditSuppression;

trait DescribeAuditSuppressionTrait
{
    /**
     * @param DescribeAuditSuppressionRequest $args
     * @return DescribeAuditSuppressionResponse
     */
    public function describeAuditSuppression(DescribeAuditSuppressionRequest $args)
    {
        $result = parent::describeAuditSuppression($args->toArray());
        return new DescribeAuditSuppressionResponse($result->toArray());
    }
}
