<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetBlacklistReports;

trait GetBlacklistReportsTrait
{
    /**
     * @param GetBlacklistReportsRequest $args
     * @return GetBlacklistReportsResponse
     */
    public function getBlacklistReports(GetBlacklistReportsRequest $args)
    {
        $result = parent::getBlacklistReports($args->toArray());
        return new GetBlacklistReportsResponse($result->toArray());
    }
}
