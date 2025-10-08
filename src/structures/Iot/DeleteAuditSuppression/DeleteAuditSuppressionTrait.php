<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteAuditSuppression;

trait DeleteAuditSuppressionTrait
{
    /**
     * @param DeleteAuditSuppressionRequest $args
     * @return DeleteAuditSuppressionResponse
     */
    public function deleteAuditSuppression(DeleteAuditSuppressionRequest $args)
    {
        $result = parent::deleteAuditSuppression($args->toArray());
        return new DeleteAuditSuppressionResponse($result->toArray());
    }
}
