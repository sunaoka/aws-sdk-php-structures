<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateExport;

trait UpdateExportTrait
{
    /**
     * @param UpdateExportRequest $args
     * @return UpdateExportResponse
     */
    public function updateExport(UpdateExportRequest $args)
    {
        $result = parent::updateExport($args->toArray());
        return new UpdateExportResponse($result->toArray());
    }
}
