<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredAudienceModelAssociation;

trait DeleteConfiguredAudienceModelAssociationTrait
{
    /**
     * @param DeleteConfiguredAudienceModelAssociationRequest $args
     * @return DeleteConfiguredAudienceModelAssociationResponse
     */
    public function deleteConfiguredAudienceModelAssociation(DeleteConfiguredAudienceModelAssociationRequest $args)
    {
        $result = parent::deleteConfiguredAudienceModelAssociation($args->toArray());
        return new DeleteConfiguredAudienceModelAssociationResponse($result->toArray());
    }
}
