<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeScheduledAudit;

trait DescribeScheduledAuditTrait
{
    /**
     * @param DescribeScheduledAuditRequest $args
     * @return DescribeScheduledAuditResponse
     */
    public function describeScheduledAudit(DescribeScheduledAuditRequest $args)
    {
        $result = parent::describeScheduledAudit($args->toArray());
        return new DescribeScheduledAuditResponse($result->toArray());
    }
}
