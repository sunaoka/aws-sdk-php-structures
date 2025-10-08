<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StopContinuousExport;

trait StopContinuousExportTrait
{
    /**
     * @param StopContinuousExportRequest $args
     * @return StopContinuousExportResponse
     */
    public function stopContinuousExport(StopContinuousExportRequest $args)
    {
        $result = parent::stopContinuousExport($args->toArray());
        return new StopContinuousExportResponse($result->toArray());
    }
}
