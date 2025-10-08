<?php

namespace Sunaoka\Aws\Structures\Route53\ListHealthChecks;

trait ListHealthChecksTrait
{
    /**
     * @param ListHealthChecksRequest $args
     * @return ListHealthChecksResponse
     */
    public function listHealthChecks(ListHealthChecksRequest $args)
    {
        $result = parent::listHealthChecks($args->toArray());
        return new ListHealthChecksResponse($result->toArray());
    }
}
