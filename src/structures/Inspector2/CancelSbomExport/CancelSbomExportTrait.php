<?php

namespace Sunaoka\Aws\Structures\Inspector2\CancelSbomExport;

trait CancelSbomExportTrait
{
    /**
     * @param CancelSbomExportRequest $args
     * @return CancelSbomExportResponse
     */
    public function cancelSbomExport(CancelSbomExportRequest $args)
    {
        $result = parent::cancelSbomExport($args->toArray());
        return new CancelSbomExportResponse($result->toArray());
    }
}
