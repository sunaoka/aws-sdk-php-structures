<?php

namespace Sunaoka\Aws\Structures\Iot\ListScheduledAudits;

trait ListScheduledAuditsTrait
{
    /**
     * @param ListScheduledAuditsRequest $args
     * @return ListScheduledAuditsResponse
     */
    public function listScheduledAudits(ListScheduledAuditsRequest $args)
    {
        $result = parent::listScheduledAudits($args->toArray());
        return new ListScheduledAuditsResponse($result->toArray());
    }
}
