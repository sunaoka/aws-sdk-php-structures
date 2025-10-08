<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartMetricsExport;

trait StartMetricsExportTrait
{
    /**
     * @param StartMetricsExportRequest $args
     * @return StartMetricsExportResponse
     */
    public function startMetricsExport(StartMetricsExportRequest $args)
    {
        $result = parent::startMetricsExport($args->toArray());
        return new StartMetricsExportResponse($result->toArray());
    }
}
