<?php

namespace Sunaoka\Aws\Structures\Iot\CreateScheduledAudit;

trait CreateScheduledAuditTrait
{
    /**
     * @param CreateScheduledAuditRequest $args
     * @return CreateScheduledAuditResponse
     */
    public function createScheduledAudit(CreateScheduledAuditRequest $args)
    {
        $result = parent::createScheduledAudit($args->toArray());
        return new CreateScheduledAuditResponse($result->toArray());
    }
}
