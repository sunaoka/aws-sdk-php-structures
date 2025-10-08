<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListMobileSdkReleases;

trait ListMobileSdkReleasesTrait
{
    /**
     * @param ListMobileSdkReleasesRequest $args
     * @return ListMobileSdkReleasesResponse
     */
    public function listMobileSdkReleases(ListMobileSdkReleasesRequest $args)
    {
        $result = parent::listMobileSdkReleases($args->toArray());
        return new ListMobileSdkReleasesResponse($result->toArray());
    }
}
