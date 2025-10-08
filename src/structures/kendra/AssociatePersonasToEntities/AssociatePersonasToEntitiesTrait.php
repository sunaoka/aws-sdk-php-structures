<?php

namespace Sunaoka\Aws\Structures\kendra\AssociatePersonasToEntities;

trait AssociatePersonasToEntitiesTrait
{
    /**
     * @param AssociatePersonasToEntitiesRequest $args
     * @return AssociatePersonasToEntitiesResponse
     */
    public function associatePersonasToEntities(AssociatePersonasToEntitiesRequest $args)
    {
        $result = parent::associatePersonasToEntities($args->toArray());
        return new AssociatePersonasToEntitiesResponse($result->toArray());
    }
}
