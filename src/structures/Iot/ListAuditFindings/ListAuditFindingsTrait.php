<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditFindings;

trait ListAuditFindingsTrait
{
    /**
     * @param ListAuditFindingsRequest $args
     * @return ListAuditFindingsResponse
     */
    public function listAuditFindings(ListAuditFindingsRequest $args)
    {
        $result = parent::listAuditFindings($args->toArray());
        return new ListAuditFindingsResponse($result->toArray());
    }
}
