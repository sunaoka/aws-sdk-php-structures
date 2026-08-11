<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetAnalysisLogExport;

trait GetAnalysisLogExportTrait
{
    /**
     * @param GetAnalysisLogExportRequest $args
     * @return GetAnalysisLogExportResponse
     */
    public function getAnalysisLogExport(GetAnalysisLogExportRequest $args)
    {
        $result = parent::getAnalysisLogExport($args->toArray());
        return new GetAnalysisLogExportResponse($result->toArray());
    }
}
