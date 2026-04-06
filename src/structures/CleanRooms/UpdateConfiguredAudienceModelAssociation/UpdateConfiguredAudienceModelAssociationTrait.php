<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredAudienceModelAssociation;

trait UpdateConfiguredAudienceModelAssociationTrait
{
    /**
     * @param UpdateConfiguredAudienceModelAssociationRequest $args
     * @return UpdateConfiguredAudienceModelAssociationResponse
     */
    public function updateConfiguredAudienceModelAssociation(UpdateConfiguredAudienceModelAssociationRequest $args)
    {
        $result = parent::updateConfiguredAudienceModelAssociation($args->toArray());
        return new UpdateConfiguredAudienceModelAssociationResponse($result->toArray());
    }
}
