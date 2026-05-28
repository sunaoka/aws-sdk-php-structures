<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateReport;

trait CreateReportTrait
{
    /**
     * @param CreateReportRequest $args
     * @return CreateReportResponse
     */
    public function createReport(CreateReportRequest $args)
    {
        $result = parent::createReport($args->toArray());
        return new CreateReportResponse($result->toArray());
    }
}
