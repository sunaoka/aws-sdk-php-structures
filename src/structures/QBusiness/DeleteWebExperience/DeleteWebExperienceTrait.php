<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteWebExperience;

trait DeleteWebExperienceTrait
{
    /**
     * @param DeleteWebExperienceRequest $args
     * @return DeleteWebExperienceResponse
     */
    public function deleteWebExperience(DeleteWebExperienceRequest $args)
    {
        $result = parent::deleteWebExperience($args->toArray());
        return new DeleteWebExperienceResponse($result->toArray());
    }
}
