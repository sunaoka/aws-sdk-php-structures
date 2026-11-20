<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\CreateSocialConnectionAuthorizationUrl;

trait CreateSocialConnectionAuthorizationUrlTrait
{
    /**
     * @param CreateSocialConnectionAuthorizationUrlRequest $args
     * @return CreateSocialConnectionAuthorizationUrlResponse
     */
    public function createSocialConnectionAuthorizationUrl(CreateSocialConnectionAuthorizationUrlRequest $args)
    {
        $result = parent::createSocialConnectionAuthorizationUrl($args->toArray());
        return new CreateSocialConnectionAuthorizationUrlResponse($result->toArray());
    }
}
