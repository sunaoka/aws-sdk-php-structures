<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\ListAbuseReportStatuses;

trait ListAbuseReportStatusesTrait
{
    /**
     * @param ListAbuseReportStatusesRequest $args
     * @return ListAbuseReportStatusesResponse
     */
    public function listAbuseReportStatuses(ListAbuseReportStatusesRequest $args)
    {
        $result = parent::listAbuseReportStatuses($args->toArray());
        return new ListAbuseReportStatusesResponse($result->toArray());
    }
}
