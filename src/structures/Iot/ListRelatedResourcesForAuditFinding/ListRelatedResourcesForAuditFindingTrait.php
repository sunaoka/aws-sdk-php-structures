<?php

namespace Sunaoka\Aws\Structures\Iot\ListRelatedResourcesForAuditFinding;

trait ListRelatedResourcesForAuditFindingTrait
{
    /**
     * @param ListRelatedResourcesForAuditFindingRequest $args
     * @return ListRelatedResourcesForAuditFindingResponse
     */
    public function listRelatedResourcesForAuditFinding(ListRelatedResourcesForAuditFindingRequest $args)
    {
        $result = parent::listRelatedResourcesForAuditFinding($args->toArray());
        return new ListRelatedResourcesForAuditFindingResponse($result->toArray());
    }
}
