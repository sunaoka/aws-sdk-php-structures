<?php

namespace Sunaoka\Aws\Structures\kendra\DisassociateEntitiesFromExperience;

trait DisassociateEntitiesFromExperienceTrait
{
    /**
     * @param DisassociateEntitiesFromExperienceRequest $args
     * @return DisassociateEntitiesFromExperienceResponse
     */
    public function disassociateEntitiesFromExperience(DisassociateEntitiesFromExperienceRequest $args)
    {
        $result = parent::disassociateEntitiesFromExperience($args->toArray());
        return new DisassociateEntitiesFromExperienceResponse($result->toArray());
    }
}
