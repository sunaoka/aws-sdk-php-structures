<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExport;

trait GetExportTrait
{
    /**
     * @param GetExportRequest $args
     * @return GetExportResponse
     */
    public function getExport(GetExportRequest $args)
    {
        $result = parent::getExport($args->toArray());
        return new GetExportResponse($result->toArray());
    }
}
