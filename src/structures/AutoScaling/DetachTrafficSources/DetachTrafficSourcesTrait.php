<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DetachTrafficSources;

trait DetachTrafficSourcesTrait
{
    /**
     * @param DetachTrafficSourcesRequest $args
     * @return DetachTrafficSourcesResponse
     */
    public function detachTrafficSources(DetachTrafficSourcesRequest $args)
    {
        $result = parent::detachTrafficSources($args->toArray());
        return new DetachTrafficSourcesResponse($result->toArray());
    }
}
