<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredTableAssociation;

trait DeleteConfiguredTableAssociationTrait
{
    /**
     * @param DeleteConfiguredTableAssociationRequest $args
     * @return DeleteConfiguredTableAssociationResponse
     */
    public function deleteConfiguredTableAssociation(DeleteConfiguredTableAssociationRequest $args)
    {
        $result = parent::deleteConfiguredTableAssociation($args->toArray());
        return new DeleteConfiguredTableAssociationResponse($result->toArray());
    }
}
