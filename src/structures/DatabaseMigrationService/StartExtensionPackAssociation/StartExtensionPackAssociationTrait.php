<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartExtensionPackAssociation;

trait StartExtensionPackAssociationTrait
{
    /**
     * @param StartExtensionPackAssociationRequest $args
     * @return StartExtensionPackAssociationResponse
     */
    public function startExtensionPackAssociation(StartExtensionPackAssociationRequest $args)
    {
        $result = parent::startExtensionPackAssociation($args->toArray());
        return new StartExtensionPackAssociationResponse($result->toArray());
    }
}
