<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReports;

trait BatchGetReportsTrait
{
    /**
     * @param BatchGetReportsRequest $args
     * @return BatchGetReportsResponse
     */
    public function batchGetReports(BatchGetReportsRequest $args)
    {
        $result = parent::batchGetReports($args->toArray());
        return new BatchGetReportsResponse($result->toArray());
    }
}
