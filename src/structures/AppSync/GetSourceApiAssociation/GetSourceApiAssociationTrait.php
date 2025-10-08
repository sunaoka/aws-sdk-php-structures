<?php

namespace Sunaoka\Aws\Structures\AppSync\GetSourceApiAssociation;

trait GetSourceApiAssociationTrait
{
    /**
     * @param GetSourceApiAssociationRequest $args
     * @return GetSourceApiAssociationResponse
     */
    public function getSourceApiAssociation(GetSourceApiAssociationRequest $args)
    {
        $result = parent::getSourceApiAssociation($args->toArray());
        return new GetSourceApiAssociationResponse($result->toArray());
    }
}
