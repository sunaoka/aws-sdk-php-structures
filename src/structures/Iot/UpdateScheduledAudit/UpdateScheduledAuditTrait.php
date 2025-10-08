<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateScheduledAudit;

trait UpdateScheduledAuditTrait
{
    /**
     * @param UpdateScheduledAuditRequest $args
     * @return UpdateScheduledAuditResponse
     */
    public function updateScheduledAudit(UpdateScheduledAuditRequest $args)
    {
        $result = parent::updateScheduledAudit($args->toArray());
        return new UpdateScheduledAuditResponse($result->toArray());
    }
}
