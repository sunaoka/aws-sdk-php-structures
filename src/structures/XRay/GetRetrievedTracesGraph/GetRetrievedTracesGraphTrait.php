<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph;

trait GetRetrievedTracesGraphTrait
{
    /**
     * @param GetRetrievedTracesGraphRequest $args
     * @return GetRetrievedTracesGraphResponse
     */
    public function getRetrievedTracesGraph(GetRetrievedTracesGraphRequest $args)
    {
        $result = parent::getRetrievedTracesGraph($args->toArray());
        return new GetRetrievedTracesGraphResponse($result->toArray());
    }
}
