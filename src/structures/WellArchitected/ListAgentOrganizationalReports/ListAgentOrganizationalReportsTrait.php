<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentOrganizationalReports;

trait ListAgentOrganizationalReportsTrait
{
    /**
     * @param ListAgentOrganizationalReportsRequest $args
     * @return ListAgentOrganizationalReportsResponse
     */
    public function listAgentOrganizationalReports(ListAgentOrganizationalReportsRequest $args)
    {
        $result = parent::listAgentOrganizationalReports($args->toArray());
        return new ListAgentOrganizationalReportsResponse($result->toArray());
    }
}
