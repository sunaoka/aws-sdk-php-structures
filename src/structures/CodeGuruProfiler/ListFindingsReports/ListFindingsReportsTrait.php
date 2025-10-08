<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListFindingsReports;

trait ListFindingsReportsTrait
{
    /**
     * @param ListFindingsReportsRequest $args
     * @return ListFindingsReportsResponse
     */
    public function listFindingsReports(ListFindingsReportsRequest $args)
    {
        $result = parent::listFindingsReports($args->toArray());
        return new ListFindingsReportsResponse($result->toArray());
    }
}
