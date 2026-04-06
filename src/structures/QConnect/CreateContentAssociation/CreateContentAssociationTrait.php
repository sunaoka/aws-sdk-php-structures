<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContentAssociation;

trait CreateContentAssociationTrait
{
    /**
     * @param CreateContentAssociationRequest $args
     * @return CreateContentAssociationResponse
     */
    public function createContentAssociation(CreateContentAssociationRequest $args)
    {
        $result = parent::createContentAssociation($args->toArray());
        return new CreateContentAssociationResponse($result->toArray());
    }
}
