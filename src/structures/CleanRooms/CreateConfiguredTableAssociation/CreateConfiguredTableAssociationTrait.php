<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAssociation;

trait CreateConfiguredTableAssociationTrait
{
    /**
     * @param CreateConfiguredTableAssociationRequest $args
     * @return CreateConfiguredTableAssociationResponse
     */
    public function createConfiguredTableAssociation(CreateConfiguredTableAssociationRequest $args)
    {
        $result = parent::createConfiguredTableAssociation($args->toArray());
        return new CreateConfiguredTableAssociationResponse($result->toArray());
    }
}
