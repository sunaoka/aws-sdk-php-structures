<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetMobileSdkRelease;

trait GetMobileSdkReleaseTrait
{
    /**
     * @param GetMobileSdkReleaseRequest $args
     * @return GetMobileSdkReleaseResponse
     */
    public function getMobileSdkRelease(GetMobileSdkReleaseRequest $args)
    {
        $result = parent::getMobileSdkRelease($args->toArray());
        return new GetMobileSdkReleaseResponse($result->toArray());
    }
}
