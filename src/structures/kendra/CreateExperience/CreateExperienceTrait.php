<?php

namespace Sunaoka\Aws\Structures\kendra\CreateExperience;

trait CreateExperienceTrait
{
    /**
     * @param CreateExperienceRequest $args
     * @return CreateExperienceResponse
     */
    public function createExperience(CreateExperienceRequest $args)
    {
        $result = parent::createExperience($args->toArray());
        return new CreateExperienceResponse($result->toArray());
    }
}
