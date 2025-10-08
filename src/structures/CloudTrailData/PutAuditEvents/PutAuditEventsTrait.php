<?php

namespace Sunaoka\Aws\Structures\CloudTrailData\PutAuditEvents;

trait PutAuditEventsTrait
{
    /**
     * @param PutAuditEventsRequest $args
     * @return PutAuditEventsResponse
     */
    public function putAuditEvents(PutAuditEventsRequest $args)
    {
        $result = parent::putAuditEvents($args->toArray());
        return new PutAuditEventsResponse($result->toArray());
    }
}
