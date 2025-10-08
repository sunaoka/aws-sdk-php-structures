<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditSuppressions;

trait ListAuditSuppressionsTrait
{
    /**
     * @param ListAuditSuppressionsRequest $args
     * @return ListAuditSuppressionsResponse
     */
    public function listAuditSuppressions(ListAuditSuppressionsRequest $args)
    {
        $result = parent::listAuditSuppressions($args->toArray());
        return new ListAuditSuppressionsResponse($result->toArray());
    }
}
