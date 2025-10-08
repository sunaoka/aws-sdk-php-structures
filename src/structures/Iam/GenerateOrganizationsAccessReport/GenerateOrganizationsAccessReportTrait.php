<?php

namespace Sunaoka\Aws\Structures\Iam\GenerateOrganizationsAccessReport;

trait GenerateOrganizationsAccessReportTrait
{
    /**
     * @param GenerateOrganizationsAccessReportRequest $args
     * @return GenerateOrganizationsAccessReportResponse
     */
    public function generateOrganizationsAccessReport(GenerateOrganizationsAccessReportRequest $args)
    {
        $result = parent::generateOrganizationsAccessReport($args->toArray());
        return new GenerateOrganizationsAccessReportResponse($result->toArray());
    }
}
