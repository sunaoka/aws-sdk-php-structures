<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAuditSuppression;

trait UpdateAuditSuppressionTrait
{
    /**
     * @param UpdateAuditSuppressionRequest $args
     * @return UpdateAuditSuppressionResponse
     */
    public function updateAuditSuppression(UpdateAuditSuppressionRequest $args)
    {
        $result = parent::updateAuditSuppression($args->toArray());
        return new UpdateAuditSuppressionResponse($result->toArray());
    }
}
