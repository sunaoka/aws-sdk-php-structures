<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation;

trait UpdateAssociationTrait
{
    /**
     * @param UpdateAssociationRequest $args
     * @return UpdateAssociationResponse
     */
    public function updateAssociation(UpdateAssociationRequest $args)
    {
        $result = parent::updateAssociation($args->toArray());
        return new UpdateAssociationResponse($result->toArray());
    }
}
