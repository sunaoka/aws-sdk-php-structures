<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateAnonymousWebExperienceUrl;

trait CreateAnonymousWebExperienceUrlTrait
{
    /**
     * @param CreateAnonymousWebExperienceUrlRequest $args
     * @return CreateAnonymousWebExperienceUrlResponse
     */
    public function createAnonymousWebExperienceUrl(CreateAnonymousWebExperienceUrlRequest $args)
    {
        $result = parent::createAnonymousWebExperienceUrl($args->toArray());
        return new CreateAnonymousWebExperienceUrlResponse($result->toArray());
    }
}
