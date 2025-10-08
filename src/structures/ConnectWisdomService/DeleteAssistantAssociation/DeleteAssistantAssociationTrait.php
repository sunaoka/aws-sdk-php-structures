<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\DeleteAssistantAssociation;

trait DeleteAssistantAssociationTrait
{
    /**
     * @param DeleteAssistantAssociationRequest $args
     * @return DeleteAssistantAssociationResponse
     */
    public function deleteAssistantAssociation(DeleteAssistantAssociationRequest $args)
    {
        $result = parent::deleteAssistantAssociation($args->toArray());
        return new DeleteAssistantAssociationResponse($result->toArray());
    }
}
