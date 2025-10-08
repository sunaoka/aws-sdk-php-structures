<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperienceEntities;

trait ListExperienceEntitiesTrait
{
    /**
     * @param ListExperienceEntitiesRequest $args
     * @return ListExperienceEntitiesResponse
     */
    public function listExperienceEntities(ListExperienceEntitiesRequest $args)
    {
        $result = parent::listExperienceEntities($args->toArray());
        return new ListExperienceEntitiesResponse($result->toArray());
    }
}
