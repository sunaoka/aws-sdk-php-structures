<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithmAssociation;

trait CreateConfiguredModelAlgorithmAssociationTrait
{
    /**
     * @param CreateConfiguredModelAlgorithmAssociationRequest $args
     * @return CreateConfiguredModelAlgorithmAssociationResponse
     */
    public function createConfiguredModelAlgorithmAssociation(CreateConfiguredModelAlgorithmAssociationRequest $args)
    {
        $result = parent::createConfiguredModelAlgorithmAssociation($args->toArray());
        return new CreateConfiguredModelAlgorithmAssociationResponse($result->toArray());
    }
}
