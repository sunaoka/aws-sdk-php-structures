<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetFindingsReportAccountSummary;

trait GetFindingsReportAccountSummaryTrait
{
    /**
     * @param GetFindingsReportAccountSummaryRequest $args
     * @return GetFindingsReportAccountSummaryResponse
     */
    public function getFindingsReportAccountSummary(GetFindingsReportAccountSummaryRequest $args)
    {
        $result = parent::getFindingsReportAccountSummary($args->toArray());
        return new GetFindingsReportAccountSummaryResponse($result->toArray());
    }
}
