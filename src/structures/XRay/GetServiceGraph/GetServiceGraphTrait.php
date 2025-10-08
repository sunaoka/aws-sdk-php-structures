<?php

namespace Sunaoka\Aws\Structures\XRay\GetServiceGraph;

trait GetServiceGraphTrait
{
    /**
     * @param GetServiceGraphRequest $args
     * @return GetServiceGraphResponse
     */
    public function getServiceGraph(GetServiceGraphRequest $args)
    {
        $result = parent::getServiceGraph($args->toArray());
        return new GetServiceGraphResponse($result->toArray());
    }
}
