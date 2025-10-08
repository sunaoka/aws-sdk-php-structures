<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceGraph;

trait GetTraceGraphTrait
{
    /**
     * @param GetTraceGraphRequest $args
     * @return GetTraceGraphResponse
     */
    public function getTraceGraph(GetTraceGraphRequest $args)
    {
        $result = parent::getTraceGraph($args->toArray());
        return new GetTraceGraphResponse($result->toArray());
    }
}
