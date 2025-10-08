<?php

namespace Sunaoka\Aws\Structures\AutoScaling\AttachTrafficSources;

trait AttachTrafficSourcesTrait
{
    /**
     * @param AttachTrafficSourcesRequest $args
     * @return AttachTrafficSourcesResponse
     */
    public function attachTrafficSources(AttachTrafficSourcesRequest $args)
    {
        $result = parent::attachTrafficSources($args->toArray());
        return new AttachTrafficSourcesResponse($result->toArray());
    }
}
