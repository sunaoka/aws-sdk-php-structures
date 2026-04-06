<?php

namespace Sunaoka\Aws\Structures\XRay\CancelTraceRetrieval;

trait CancelTraceRetrievalTrait
{
    /**
     * @param CancelTraceRetrievalRequest $args
     * @return CancelTraceRetrievalResponse
     */
    public function cancelTraceRetrieval(CancelTraceRetrievalRequest $args)
    {
        $result = parent::cancelTraceRetrieval($args->toArray());
        return new CancelTraceRetrievalResponse($result->toArray());
    }
}
