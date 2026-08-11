<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListAnalysisLogExports;

trait ListAnalysisLogExportsTrait
{
    /**
     * @param ListAnalysisLogExportsRequest $args
     * @return ListAnalysisLogExportsResponse
     */
    public function listAnalysisLogExports(ListAnalysisLogExportsRequest $args)
    {
        $result = parent::listAnalysisLogExports($args->toArray());
        return new ListAnalysisLogExportsResponse($result->toArray());
    }
}
