<?php

namespace Sunaoka\Aws\Structures\mgn\StartExport;

trait StartExportTrait
{
    /**
     * @param StartExportRequest $args
     * @return StartExportResponse
     */
    public function startExport(StartExportRequest $args)
    {
        $result = parent::startExport($args->toArray());
        return new StartExportResponse($result->toArray());
    }
}
