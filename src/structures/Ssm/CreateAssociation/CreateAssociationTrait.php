<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociation;

trait CreateAssociationTrait
{
    /**
     * @param CreateAssociationRequest $args
     * @return CreateAssociationResponse
     */
    public function createAssociation(CreateAssociationRequest $args)
    {
        $result = parent::createAssociation($args->toArray());
        return new CreateAssociationResponse($result->toArray());
    }
}
