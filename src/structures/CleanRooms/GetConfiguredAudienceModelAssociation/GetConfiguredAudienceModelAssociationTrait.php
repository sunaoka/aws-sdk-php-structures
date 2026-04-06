<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredAudienceModelAssociation;

trait GetConfiguredAudienceModelAssociationTrait
{
    /**
     * @param GetConfiguredAudienceModelAssociationRequest $args
     * @return GetConfiguredAudienceModelAssociationResponse
     */
    public function getConfiguredAudienceModelAssociation(GetConfiguredAudienceModelAssociationRequest $args)
    {
        $result = parent::getConfiguredAudienceModelAssociation($args->toArray());
        return new GetConfiguredAudienceModelAssociationResponse($result->toArray());
    }
}
