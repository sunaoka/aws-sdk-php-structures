<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces;

trait ListRetrievedTracesTrait
{
    /**
     * @param ListRetrievedTracesRequest $args
     * @return ListRetrievedTracesResponse
     */
    public function listRetrievedTraces(ListRetrievedTracesRequest $args)
    {
        $result = parent::listRetrievedTraces($args->toArray());
        return new ListRetrievedTracesResponse($result->toArray());
    }
}
