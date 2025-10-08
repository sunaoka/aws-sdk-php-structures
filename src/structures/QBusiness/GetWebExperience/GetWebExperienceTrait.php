<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetWebExperience;

trait GetWebExperienceTrait
{
    /**
     * @param GetWebExperienceRequest $args
     * @return GetWebExperienceResponse
     */
    public function getWebExperience(GetWebExperienceRequest $args)
    {
        $result = parent::getWebExperience($args->toArray());
        return new GetWebExperienceResponse($result->toArray());
    }
}
