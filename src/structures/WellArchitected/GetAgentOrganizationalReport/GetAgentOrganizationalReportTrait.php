<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReport;

trait GetAgentOrganizationalReportTrait
{
    /**
     * @param GetAgentOrganizationalReportRequest $args
     * @return GetAgentOrganizationalReportResponse
     */
    public function getAgentOrganizationalReport(GetAgentOrganizationalReportRequest $args)
    {
        $result = parent::getAgentOrganizationalReport($args->toArray());
        return new GetAgentOrganizationalReportResponse($result->toArray());
    }
}
