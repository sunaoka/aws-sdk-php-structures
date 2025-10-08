<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCacheReport;

trait DescribeCacheReportTrait
{
    /**
     * @param DescribeCacheReportRequest $args
     * @return DescribeCacheReportResponse
     */
    public function describeCacheReport(DescribeCacheReportRequest $args)
    {
        $result = parent::describeCacheReport($args->toArray());
        return new DescribeCacheReportResponse($result->toArray());
    }
}
