<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateSourceApiAssociation;

trait UpdateSourceApiAssociationTrait
{
    /**
     * @param UpdateSourceApiAssociationRequest $args
     * @return UpdateSourceApiAssociationResponse
     */
    public function updateSourceApiAssociation(UpdateSourceApiAssociationRequest $args)
    {
        $result = parent::updateSourceApiAssociation($args->toArray());
        return new UpdateSourceApiAssociationResponse($result->toArray());
    }
}
