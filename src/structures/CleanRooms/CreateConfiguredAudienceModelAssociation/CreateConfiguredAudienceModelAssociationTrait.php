<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredAudienceModelAssociation;

trait CreateConfiguredAudienceModelAssociationTrait
{
    /**
     * @param CreateConfiguredAudienceModelAssociationRequest $args
     * @return CreateConfiguredAudienceModelAssociationResponse
     */
    public function createConfiguredAudienceModelAssociation(CreateConfiguredAudienceModelAssociationRequest $args)
    {
        $result = parent::createConfiguredAudienceModelAssociation($args->toArray());
        return new CreateConfiguredAudienceModelAssociationResponse($result->toArray());
    }
}
