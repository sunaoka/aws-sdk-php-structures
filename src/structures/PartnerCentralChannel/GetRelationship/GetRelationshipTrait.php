<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\GetRelationship;

trait GetRelationshipTrait
{
    /**
     * @param GetRelationshipRequest $args
     * @return GetRelationshipResponse
     */
    public function getRelationship(GetRelationshipRequest $args)
    {
        $result = parent::getRelationship($args->toArray());
        return new GetRelationshipResponse($result->toArray());
    }
}
