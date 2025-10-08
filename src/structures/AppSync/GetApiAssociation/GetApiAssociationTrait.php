<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiAssociation;

trait GetApiAssociationTrait
{
    /**
     * @param GetApiAssociationRequest $args
     * @return GetApiAssociationResponse
     */
    public function getApiAssociation(GetApiAssociationRequest $args)
    {
        $result = parent::getApiAssociation($args->toArray());
        return new GetApiAssociationResponse($result->toArray());
    }
}
