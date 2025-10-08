<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartContinuousExport;

trait StartContinuousExportTrait
{
    /**
     * @param StartContinuousExportRequest $args
     * @return StartContinuousExportResponse
     */
    public function startContinuousExport(StartContinuousExportRequest $args)
    {
        $result = parent::startContinuousExport($args->toArray());
        return new StartContinuousExportResponse($result->toArray());
    }
}
