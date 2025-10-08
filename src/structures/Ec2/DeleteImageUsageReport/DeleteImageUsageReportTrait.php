<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteImageUsageReport;

trait DeleteImageUsageReportTrait
{
    /**
     * @param DeleteImageUsageReportRequest $args
     * @return DeleteImageUsageReportResponse
     */
    public function deleteImageUsageReport(DeleteImageUsageReportRequest $args)
    {
        $result = parent::deleteImageUsageReport($args->toArray());
        return new DeleteImageUsageReportResponse($result->toArray());
    }
}
