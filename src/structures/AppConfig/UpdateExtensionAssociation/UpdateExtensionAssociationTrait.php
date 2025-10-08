<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExtensionAssociation;

trait UpdateExtensionAssociationTrait
{
    /**
     * @param UpdateExtensionAssociationRequest $args
     * @return UpdateExtensionAssociationResponse
     */
    public function updateExtensionAssociation(UpdateExtensionAssociationRequest $args)
    {
        $result = parent::updateExtensionAssociation($args->toArray());
        return new UpdateExtensionAssociationResponse($result->toArray());
    }
}
