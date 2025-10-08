<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExtensionAssociation;

trait GetExtensionAssociationTrait
{
    /**
     * @param GetExtensionAssociationRequest $args
     * @return GetExtensionAssociationResponse
     */
    public function getExtensionAssociation(GetExtensionAssociationRequest $args)
    {
        $result = parent::getExtensionAssociation($args->toArray());
        return new GetExtensionAssociationResponse($result->toArray());
    }
}
