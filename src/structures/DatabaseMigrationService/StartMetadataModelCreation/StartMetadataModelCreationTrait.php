<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelCreation;

trait StartMetadataModelCreationTrait
{
    /**
     * @param StartMetadataModelCreationRequest $args
     * @return StartMetadataModelCreationResponse
     */
    public function startMetadataModelCreation(StartMetadataModelCreationRequest $args)
    {
        $result = parent::startMetadataModelCreation($args->toArray());
        return new StartMetadataModelCreationResponse($result->toArray());
    }
}
