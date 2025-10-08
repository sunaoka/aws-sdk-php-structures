<?php

namespace Sunaoka\Aws\Structures\WAFV2\GenerateMobileSdkReleaseUrl;

trait GenerateMobileSdkReleaseUrlTrait
{
    /**
     * @param GenerateMobileSdkReleaseUrlRequest $args
     * @return GenerateMobileSdkReleaseUrlResponse
     */
    public function generateMobileSdkReleaseUrl(GenerateMobileSdkReleaseUrlRequest $args)
    {
        $result = parent::generateMobileSdkReleaseUrl($args->toArray());
        return new GenerateMobileSdkReleaseUrlResponse($result->toArray());
    }
}
