<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetAssistantAssociation;

trait GetAssistantAssociationTrait
{
    /**
     * @param GetAssistantAssociationRequest $args
     * @return GetAssistantAssociationResponse
     */
    public function getAssistantAssociation(GetAssistantAssociationRequest $args)
    {
        $result = parent::getAssistantAssociation($args->toArray());
        return new GetAssistantAssociationResponse($result->toArray());
    }
}
