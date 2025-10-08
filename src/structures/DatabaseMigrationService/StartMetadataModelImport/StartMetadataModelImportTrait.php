<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelImport;

trait StartMetadataModelImportTrait
{
    /**
     * @param StartMetadataModelImportRequest $args
     * @return StartMetadataModelImportResponse
     */
    public function startMetadataModelImport(StartMetadataModelImportRequest $args)
    {
        $result = parent::startMetadataModelImport($args->toArray());
        return new StartMetadataModelImportResponse($result->toArray());
    }
}
