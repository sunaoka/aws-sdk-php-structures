<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListCacheReports;

trait ListCacheReportsTrait
{
    /**
     * @param ListCacheReportsRequest $args
     * @return ListCacheReportsResponse
     */
    public function listCacheReports(ListCacheReportsRequest $args)
    {
        $result = parent::listCacheReports($args->toArray());
        return new ListCacheReportsResponse($result->toArray());
    }
}
