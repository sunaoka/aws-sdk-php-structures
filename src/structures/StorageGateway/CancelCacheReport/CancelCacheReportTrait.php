<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CancelCacheReport;

trait CancelCacheReportTrait
{
    /**
     * @param CancelCacheReportRequest $args
     * @return CancelCacheReportResponse
     */
    public function cancelCacheReport(CancelCacheReportRequest $args)
    {
        $result = parent::cancelCacheReport($args->toArray());
        return new CancelCacheReportResponse($result->toArray());
    }
}
