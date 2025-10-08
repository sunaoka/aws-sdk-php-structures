<?php

namespace Sunaoka\Aws\Structures\Connect\GetFlowAssociation;

trait GetFlowAssociationTrait
{
    /**
     * @param GetFlowAssociationRequest $args
     * @return GetFlowAssociationResponse
     */
    public function getFlowAssociation(GetFlowAssociationRequest $args)
    {
        $result = parent::getFlowAssociation($args->toArray());
        return new GetFlowAssociationResponse($result->toArray());
    }
}
