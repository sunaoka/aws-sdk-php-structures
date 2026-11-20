<?php

namespace Sunaoka\Aws\Structures\Route53\ListHealthChecksBySource;

trait ListHealthChecksBySourceTrait
{
    /**
     * @param ListHealthChecksBySourceRequest $args
     * @return ListHealthChecksBySourceResponse
     */
    public function listHealthChecksBySource(ListHealthChecksBySourceRequest $args)
    {
        $result = parent::listHealthChecksBySource($args->toArray());
        return new ListHealthChecksBySourceResponse($result->toArray());
    }
}
