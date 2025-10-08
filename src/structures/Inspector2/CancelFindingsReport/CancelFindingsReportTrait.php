<?php

namespace Sunaoka\Aws\Structures\Inspector2\CancelFindingsReport;

trait CancelFindingsReportTrait
{
    /**
     * @param CancelFindingsReportRequest $args
     * @return CancelFindingsReportResponse
     */
    public function cancelFindingsReport(CancelFindingsReportRequest $args)
    {
        $result = parent::cancelFindingsReport($args->toArray());
        return new CancelFindingsReportResponse($result->toArray());
    }
}
