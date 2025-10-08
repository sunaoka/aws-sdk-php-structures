<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformVersions;

trait ListPlatformVersionsTrait
{
    /**
     * @param ListPlatformVersionsRequest $args
     * @return ListPlatformVersionsResponse
     */
    public function listPlatformVersions(ListPlatformVersionsRequest $args)
    {
        $result = parent::listPlatformVersions($args->toArray());
        return new ListPlatformVersionsResponse($result->toArray());
    }
}
