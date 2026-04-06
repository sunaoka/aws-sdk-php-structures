<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithmAssociation;

trait GetConfiguredModelAlgorithmAssociationTrait
{
    /**
     * @param GetConfiguredModelAlgorithmAssociationRequest $args
     * @return GetConfiguredModelAlgorithmAssociationResponse
     */
    public function getConfiguredModelAlgorithmAssociation(GetConfiguredModelAlgorithmAssociationRequest $args)
    {
        $result = parent::getConfiguredModelAlgorithmAssociation($args->toArray());
        return new GetConfiguredModelAlgorithmAssociationResponse($result->toArray());
    }
}
