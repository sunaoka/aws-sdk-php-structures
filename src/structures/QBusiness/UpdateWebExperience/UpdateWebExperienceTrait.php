<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateWebExperience;

trait UpdateWebExperienceTrait
{
    /**
     * @param UpdateWebExperienceRequest $args
     * @return UpdateWebExperienceResponse
     */
    public function updateWebExperience(UpdateWebExperienceRequest $args)
    {
        $result = parent::updateWebExperience($args->toArray());
        return new UpdateWebExperienceResponse($result->toArray());
    }
}
