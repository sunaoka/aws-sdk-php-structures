<?php

namespace Sunaoka\Aws\Structures\Route53\ListHealthCheckSources;

trait ListHealthCheckSourcesTrait
{
    /**
     * @param ListHealthCheckSourcesRequest $args
     * @return ListHealthCheckSourcesResponse
     */
    public function listHealthCheckSources(ListHealthCheckSourcesRequest $args)
    {
        $result = parent::listHealthCheckSources($args->toArray());
        return new ListHealthCheckSourcesResponse($result->toArray());
    }
}
