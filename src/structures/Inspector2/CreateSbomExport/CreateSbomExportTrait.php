<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateSbomExport;

trait CreateSbomExportTrait
{
    /**
     * @param CreateSbomExportRequest $args
     * @return CreateSbomExportResponse
     */
    public function createSbomExport(CreateSbomExportRequest $args)
    {
        $result = parent::createSbomExport($args->toArray());
        return new CreateSbomExportResponse($result->toArray());
    }
}
