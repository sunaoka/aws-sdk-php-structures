<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListReports;

trait ListReportsTrait
{
    /**
     * @param ListReportsRequest $args
     * @return ListReportsResponse
     */
    public function listReports(ListReportsRequest $args)
    {
        $result = parent::listReports($args->toArray());
        return new ListReportsResponse($result->toArray());
    }
}
