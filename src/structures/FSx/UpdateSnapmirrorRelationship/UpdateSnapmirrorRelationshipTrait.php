<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapmirrorRelationship;

trait UpdateSnapmirrorRelationshipTrait
{
    /**
     * @param UpdateSnapmirrorRelationshipRequest $args
     * @return UpdateSnapmirrorRelationshipResponse
     */
    public function updateSnapmirrorRelationship(UpdateSnapmirrorRelationshipRequest $args)
    {
        $result = parent::updateSnapmirrorRelationship($args->toArray());
        return new UpdateSnapmirrorRelationshipResponse($result->toArray());
    }
}
