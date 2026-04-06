<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteConfiguredModelAlgorithmAssociation;

trait DeleteConfiguredModelAlgorithmAssociationTrait
{
    /**
     * @param DeleteConfiguredModelAlgorithmAssociationRequest $args
     * @return void
     */
    public function deleteConfiguredModelAlgorithmAssociation(DeleteConfiguredModelAlgorithmAssociationRequest $args)
    {
        parent::deleteConfiguredModelAlgorithmAssociation($args->toArray());
    }
}
