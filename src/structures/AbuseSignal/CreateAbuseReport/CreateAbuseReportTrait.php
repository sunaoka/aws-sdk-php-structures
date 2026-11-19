<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\CreateAbuseReport;

trait CreateAbuseReportTrait
{
    /**
     * @param CreateAbuseReportRequest $args
     * @return CreateAbuseReportResponse
     */
    public function createAbuseReport(CreateAbuseReportRequest $args)
    {
        $result = parent::createAbuseReport($args->toArray());
        return new CreateAbuseReportResponse($result->toArray());
    }
}
