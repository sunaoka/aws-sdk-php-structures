<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteExperience;

trait DeleteExperienceTrait
{
    /**
     * @param DeleteExperienceRequest $args
     * @return DeleteExperienceResponse
     */
    public function deleteExperience(DeleteExperienceRequest $args)
    {
        $result = parent::deleteExperience($args->toArray());
        return new DeleteExperienceResponse($result->toArray());
    }
}
