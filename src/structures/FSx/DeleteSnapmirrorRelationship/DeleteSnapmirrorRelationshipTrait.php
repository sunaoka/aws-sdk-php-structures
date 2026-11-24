<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapmirrorRelationship;

trait DeleteSnapmirrorRelationshipTrait
{
    /**
     * @param DeleteSnapmirrorRelationshipRequest $args
     * @return DeleteSnapmirrorRelationshipResponse
     */
    public function deleteSnapmirrorRelationship(DeleteSnapmirrorRelationshipRequest $args)
    {
        $result = parent::deleteSnapmirrorRelationship($args->toArray());
        return new DeleteSnapmirrorRelationshipResponse($result->toArray());
    }
}
