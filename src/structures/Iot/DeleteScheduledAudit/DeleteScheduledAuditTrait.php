<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteScheduledAudit;

trait DeleteScheduledAuditTrait
{
    /**
     * @param DeleteScheduledAuditRequest $args
     * @return DeleteScheduledAuditResponse
     */
    public function deleteScheduledAudit(DeleteScheduledAuditRequest $args)
    {
        $result = parent::deleteScheduledAudit($args->toArray());
        return new DeleteScheduledAuditResponse($result->toArray());
    }
}
