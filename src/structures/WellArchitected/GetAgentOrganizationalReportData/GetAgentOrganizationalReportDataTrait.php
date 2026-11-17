<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReportData;

trait GetAgentOrganizationalReportDataTrait
{
    /**
     * @param GetAgentOrganizationalReportDataRequest $args
     * @return GetAgentOrganizationalReportDataResponse
     */
    public function getAgentOrganizationalReportData(GetAgentOrganizationalReportDataRequest $args)
    {
        $result = parent::getAgentOrganizationalReportData($args->toArray());
        return new GetAgentOrganizationalReportDataResponse($result->toArray());
    }
}
