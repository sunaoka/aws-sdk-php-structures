<?php

namespace Sunaoka\Aws\Structures\AppSync\ListTypesByAssociation;

trait ListTypesByAssociationTrait
{
    /**
     * @param ListTypesByAssociationRequest $args
     * @return ListTypesByAssociationResponse
     */
    public function listTypesByAssociation(ListTypesByAssociationRequest $args)
    {
        $result = parent::listTypesByAssociation($args->toArray());
        return new ListTypesByAssociationResponse($result->toArray());
    }
}
