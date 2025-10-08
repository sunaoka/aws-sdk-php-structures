<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateExperience;

trait UpdateExperienceTrait
{
    /**
     * @param UpdateExperienceRequest $args
     * @return void
     */
    public function updateExperience(UpdateExperienceRequest $args)
    {
        parent::updateExperience($args->toArray());
    }
}
