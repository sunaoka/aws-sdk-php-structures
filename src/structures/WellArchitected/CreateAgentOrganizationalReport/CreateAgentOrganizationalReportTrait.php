<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentOrganizationalReport;

trait CreateAgentOrganizationalReportTrait
{
    /**
     * @param CreateAgentOrganizationalReportRequest $args
     * @return CreateAgentOrganizationalReportResponse
     */
    public function createAgentOrganizationalReport(CreateAgentOrganizationalReportRequest $args)
    {
        $result = parent::createAgentOrganizationalReport($args->toArray());
        return new CreateAgentOrganizationalReportResponse($result->toArray());
    }
}
