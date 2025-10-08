<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents;

trait GetCaseAuditEventsTrait
{
    /**
     * @param GetCaseAuditEventsRequest $args
     * @return GetCaseAuditEventsResponse
     */
    public function getCaseAuditEvents(GetCaseAuditEventsRequest $args)
    {
        $result = parent::getCaseAuditEvents($args->toArray());
        return new GetCaseAuditEventsResponse($result->toArray());
    }
}
