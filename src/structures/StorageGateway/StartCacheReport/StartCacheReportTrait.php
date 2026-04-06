<?php

namespace Sunaoka\Aws\Structures\StorageGateway\StartCacheReport;

trait StartCacheReportTrait
{
    /**
     * @param StartCacheReportRequest $args
     * @return StartCacheReportResponse
     */
    public function startCacheReport(StartCacheReportRequest $args)
    {
        $result = parent::startCacheReport($args->toArray());
        return new StartCacheReportResponse($result->toArray());
    }
}
