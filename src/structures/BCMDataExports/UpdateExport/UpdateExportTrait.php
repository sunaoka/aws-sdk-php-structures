<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\UpdateExport;

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
