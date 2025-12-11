<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateRelationship;

trait CreateRelationshipTrait
{
    /**
     * @param CreateRelationshipRequest $args
     * @return CreateRelationshipResponse
     */
    public function createRelationship(CreateRelationshipRequest $args)
    {
        $result = parent::createRelationship($args->toArray());
        return new CreateRelationshipResponse($result->toArray());
    }
}
