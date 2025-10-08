<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetFindingsReportStatus;

trait GetFindingsReportStatusTrait
{
    /**
     * @param GetFindingsReportStatusRequest $args
     * @return GetFindingsReportStatusResponse
     */
    public function getFindingsReportStatus(GetFindingsReportStatusRequest $args)
    {
        $result = parent::getFindingsReportStatus($args->toArray());
        return new GetFindingsReportStatusResponse($result->toArray());
    }
}
