<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetSbomExport;

trait GetSbomExportTrait
{
    /**
     * @param GetSbomExportRequest $args
     * @return GetSbomExportResponse
     */
    public function getSbomExport(GetSbomExportRequest $args)
    {
        $result = parent::getSbomExport($args->toArray());
        return new GetSbomExportResponse($result->toArray());
    }
}
