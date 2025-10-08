<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelExportToTarget;

trait StartMetadataModelExportToTargetTrait
{
    /**
     * @param StartMetadataModelExportToTargetRequest $args
     * @return StartMetadataModelExportToTargetResponse
     */
    public function startMetadataModelExportToTarget(StartMetadataModelExportToTargetRequest $args)
    {
        $result = parent::startMetadataModelExportToTarget($args->toArray());
        return new StartMetadataModelExportToTargetResponse($result->toArray());
    }
}
