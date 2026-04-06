<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistantAssociation;

trait CreateAssistantAssociationTrait
{
    /**
     * @param CreateAssistantAssociationRequest $args
     * @return CreateAssistantAssociationResponse
     */
    public function createAssistantAssociation(CreateAssistantAssociationRequest $args)
    {
        $result = parent::createAssistantAssociation($args->toArray());
        return new CreateAssistantAssociationResponse($result->toArray());
    }
}
