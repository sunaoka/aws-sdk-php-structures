<?php

namespace Sunaoka\Aws\Structures\Iam\GetOrganizationsAccessReport;

trait GetOrganizationsAccessReportTrait
{
    /**
     * @param GetOrganizationsAccessReportRequest $args
     * @return GetOrganizationsAccessReportResponse
     */
    public function getOrganizationsAccessReport(GetOrganizationsAccessReportRequest $args)
    {
        $result = parent::getOrganizationsAccessReport($args->toArray());
        return new GetOrganizationsAccessReportResponse($result->toArray());
    }
}
