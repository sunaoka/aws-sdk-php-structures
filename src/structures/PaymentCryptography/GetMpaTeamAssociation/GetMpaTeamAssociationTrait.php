<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetMpaTeamAssociation;

trait GetMpaTeamAssociationTrait
{
    /**
     * @param GetMpaTeamAssociationRequest $args
     * @return GetMpaTeamAssociationResponse
     */
    public function getMpaTeamAssociation(GetMpaTeamAssociationRequest $args)
    {
        $result = parent::getMpaTeamAssociation($args->toArray());
        return new GetMpaTeamAssociationResponse($result->toArray());
    }
}
