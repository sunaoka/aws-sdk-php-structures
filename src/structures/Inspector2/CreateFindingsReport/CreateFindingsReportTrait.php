<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateFindingsReport;

trait CreateFindingsReportTrait
{
    /**
     * @param CreateFindingsReportRequest $args
     * @return CreateFindingsReportResponse
     */
    public function createFindingsReport(CreateFindingsReportRequest $args)
    {
        $result = parent::createFindingsReport($args->toArray());
        return new CreateFindingsReportResponse($result->toArray());
    }
}
