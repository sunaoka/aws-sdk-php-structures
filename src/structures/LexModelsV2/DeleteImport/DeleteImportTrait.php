<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteImport;

trait DeleteImportTrait
{
    /**
     * @param DeleteImportRequest $args
     * @return DeleteImportResponse
     */
    public function deleteImport(DeleteImportRequest $args)
    {
        $result = parent::deleteImport($args->toArray());
        return new DeleteImportResponse($result->toArray());
    }
}
