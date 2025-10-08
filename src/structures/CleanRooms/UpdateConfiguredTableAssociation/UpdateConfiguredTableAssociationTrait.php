<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociation;

trait UpdateConfiguredTableAssociationTrait
{
    /**
     * @param UpdateConfiguredTableAssociationRequest $args
     * @return UpdateConfiguredTableAssociationResponse
     */
    public function updateConfiguredTableAssociation(UpdateConfiguredTableAssociationRequest $args)
    {
        $result = parent::updateConfiguredTableAssociation($args->toArray());
        return new UpdateConfiguredTableAssociationResponse($result->toArray());
    }
}
