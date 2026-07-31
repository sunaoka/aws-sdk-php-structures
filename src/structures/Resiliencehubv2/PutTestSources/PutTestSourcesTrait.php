<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\PutTestSources;

trait PutTestSourcesTrait
{
    /**
     * @param PutTestSourcesRequest $args
     * @return PutTestSourcesResponse
     */
    public function putTestSources(PutTestSourcesRequest $args)
    {
        $result = parent::putTestSources($args->toArray());
        return new PutTestSourcesResponse($result->toArray());
    }
}
