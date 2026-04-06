<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\DeleteRelationship;

trait DeleteRelationshipTrait
{
    /**
     * @param DeleteRelationshipRequest $args
     * @return DeleteRelationshipResponse
     */
    public function deleteRelationship(DeleteRelationshipRequest $args)
    {
        $result = parent::deleteRelationship($args->toArray());
        return new DeleteRelationshipResponse($result->toArray());
    }
}
