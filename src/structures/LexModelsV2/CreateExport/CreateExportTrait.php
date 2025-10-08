<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateExport;

trait CreateExportTrait
{
    /**
     * @param CreateExportRequest $args
     * @return CreateExportResponse
     */
    public function createExport(CreateExportRequest $args)
    {
        $result = parent::createExport($args->toArray());
        return new CreateExportResponse($result->toArray());
    }
}
