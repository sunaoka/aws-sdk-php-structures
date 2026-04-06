<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CancelMetadataModelCreation;

trait CancelMetadataModelCreationTrait
{
    /**
     * @param CancelMetadataModelCreationRequest $args
     * @return CancelMetadataModelCreationResponse
     */
    public function cancelMetadataModelCreation(CancelMetadataModelCreationRequest $args)
    {
        $result = parent::cancelMetadataModelCreation($args->toArray());
        return new CancelMetadataModelCreationResponse($result->toArray());
    }
}
