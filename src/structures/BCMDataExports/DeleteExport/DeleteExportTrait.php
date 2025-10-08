<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\DeleteExport;

trait DeleteExportTrait
{
    /**
     * @param DeleteExportRequest $args
     * @return DeleteExportResponse
     */
    public function deleteExport(DeleteExportRequest $args)
    {
        $result = parent::deleteExport($args->toArray());
        return new DeleteExportResponse($result->toArray());
    }
}
