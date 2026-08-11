<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartAnalysisLogExport;

trait StartAnalysisLogExportTrait
{
    /**
     * @param StartAnalysisLogExportRequest $args
     * @return StartAnalysisLogExportResponse
     */
    public function startAnalysisLogExport(StartAnalysisLogExportRequest $args)
    {
        $result = parent::startAnalysisLogExport($args->toArray());
        return new StartAnalysisLogExportResponse($result->toArray());
    }
}
