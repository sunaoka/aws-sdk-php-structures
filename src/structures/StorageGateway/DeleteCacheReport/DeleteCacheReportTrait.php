<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteCacheReport;

trait DeleteCacheReportTrait
{
    /**
     * @param DeleteCacheReportRequest $args
     * @return DeleteCacheReportResponse
     */
    public function deleteCacheReport(DeleteCacheReportRequest $args)
    {
        $result = parent::deleteCacheReport($args->toArray());
        return new DeleteCacheReportResponse($result->toArray());
    }
}
