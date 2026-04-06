<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateWebExperience;

trait CreateWebExperienceTrait
{
    /**
     * @param CreateWebExperienceRequest $args
     * @return CreateWebExperienceResponse
     */
    public function createWebExperience(CreateWebExperienceRequest $args)
    {
        $result = parent::createWebExperience($args->toArray());
        return new CreateWebExperienceResponse($result->toArray());
    }
}
