<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAssociation;

trait GetConfiguredTableAssociationTrait
{
    /**
     * @param GetConfiguredTableAssociationRequest $args
     * @return GetConfiguredTableAssociationResponse
     */
    public function getConfiguredTableAssociation(GetConfiguredTableAssociationRequest $args)
    {
        $result = parent::getConfiguredTableAssociation($args->toArray());
        return new GetConfiguredTableAssociationResponse($result->toArray());
    }
}
