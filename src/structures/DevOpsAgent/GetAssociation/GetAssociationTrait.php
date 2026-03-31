<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation;

trait GetAssociationTrait
{
    /**
     * @param GetAssociationRequest $args
     * @return GetAssociationResponse
     */
    public function getAssociation(GetAssociationRequest $args)
    {
        $result = parent::getAssociation($args->toArray());
        return new GetAssociationResponse($result->toArray());
    }
}
