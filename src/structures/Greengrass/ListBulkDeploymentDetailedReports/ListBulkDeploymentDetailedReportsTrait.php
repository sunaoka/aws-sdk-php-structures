<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeploymentDetailedReports;

trait ListBulkDeploymentDetailedReportsTrait
{
    /**
     * @param ListBulkDeploymentDetailedReportsRequest $args
     * @return ListBulkDeploymentDetailedReportsResponse
     */
    public function listBulkDeploymentDetailedReports(ListBulkDeploymentDetailedReportsRequest $args)
    {
        $result = parent::listBulkDeploymentDetailedReports($args->toArray());
        return new ListBulkDeploymentDetailedReportsResponse($result->toArray());
    }
}
