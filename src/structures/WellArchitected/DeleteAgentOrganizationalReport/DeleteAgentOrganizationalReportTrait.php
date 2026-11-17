<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentOrganizationalReport;

trait DeleteAgentOrganizationalReportTrait
{
    /**
     * @param DeleteAgentOrganizationalReportRequest $args
     * @return DeleteAgentOrganizationalReportResponse
     */
    public function deleteAgentOrganizationalReport(DeleteAgentOrganizationalReportRequest $args)
    {
        $result = parent::deleteAgentOrganizationalReport($args->toArray());
        return new DeleteAgentOrganizationalReportResponse($result->toArray());
    }
}
