<?php

namespace Sunaoka\Aws\Structures\kendra\AssociateEntitiesToExperience;

trait AssociateEntitiesToExperienceTrait
{
    /**
     * @param AssociateEntitiesToExperienceRequest $args
     * @return AssociateEntitiesToExperienceResponse
     */
    public function associateEntitiesToExperience(AssociateEntitiesToExperienceRequest $args)
    {
        $result = parent::associateEntitiesToExperience($args->toArray());
        return new AssociateEntitiesToExperienceResponse($result->toArray());
    }
}
