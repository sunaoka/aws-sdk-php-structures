<?php

namespace Sunaoka\Aws\Structures\XRay\StartTraceRetrieval;

trait StartTraceRetrievalTrait
{
    /**
     * @param StartTraceRetrievalRequest $args
     * @return StartTraceRetrievalResponse
     */
    public function startTraceRetrieval(StartTraceRetrievalRequest $args)
    {
        $result = parent::startTraceRetrieval($args->toArray());
        return new StartTraceRetrievalResponse($result->toArray());
    }
}
