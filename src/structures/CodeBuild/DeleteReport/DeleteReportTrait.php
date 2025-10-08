<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteReport;

trait DeleteReportTrait
{
    /**
     * @param DeleteReportRequest $args
     * @return DeleteReportResponse
     */
    public function deleteReport(DeleteReportRequest $args)
    {
        $result = parent::deleteReport($args->toArray());
        return new DeleteReportResponse($result->toArray());
    }
}
