<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorRelationship;

trait CreateSnapmirrorRelationshipTrait
{
    /**
     * @param CreateSnapmirrorRelationshipRequest $args
     * @return CreateSnapmirrorRelationshipResponse
     */
    public function createSnapmirrorRelationship(CreateSnapmirrorRelationshipRequest $args)
    {
        $result = parent::createSnapmirrorRelationship($args->toArray());
        return new CreateSnapmirrorRelationshipResponse($result->toArray());
    }
}
