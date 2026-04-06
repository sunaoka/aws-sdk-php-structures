<?php

namespace Sunaoka\Aws\Structures\DataZone\GetIamPortalLoginUrl;

trait GetIamPortalLoginUrlTrait
{
    /**
     * @param GetIamPortalLoginUrlRequest $args
     * @return GetIamPortalLoginUrlResponse
     */
    public function getIamPortalLoginUrl(GetIamPortalLoginUrlRequest $args)
    {
        $result = parent::getIamPortalLoginUrl($args->toArray());
        return new GetIamPortalLoginUrlResponse($result->toArray());
    }
}
