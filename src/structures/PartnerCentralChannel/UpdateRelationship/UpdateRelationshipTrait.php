<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateRelationship;

trait UpdateRelationshipTrait
{
    /**
     * @param UpdateRelationshipRequest $args
     * @return UpdateRelationshipResponse
     */
    public function updateRelationship(UpdateRelationshipRequest $args)
    {
        $result = parent::updateRelationship($args->toArray());
        return new UpdateRelationshipResponse($result->toArray());
    }
}
