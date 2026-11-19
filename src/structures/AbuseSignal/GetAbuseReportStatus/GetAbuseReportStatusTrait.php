<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\GetAbuseReportStatus;

trait GetAbuseReportStatusTrait
{
    /**
     * @param GetAbuseReportStatusRequest $args
     * @return GetAbuseReportStatusResponse
     */
    public function getAbuseReportStatus(GetAbuseReportStatusRequest $args)
    {
        $result = parent::getAbuseReportStatus($args->toArray());
        return new GetAbuseReportStatusResponse($result->toArray());
    }
}
