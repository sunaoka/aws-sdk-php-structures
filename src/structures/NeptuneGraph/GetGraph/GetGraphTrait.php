<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraph;

trait GetGraphTrait
{
    /**
     * @param GetGraphRequest $args
     * @return GetGraphResponse
     */
    public function getGraph(GetGraphRequest $args)
    {
        $result = parent::getGraph($args->toArray());
        return new GetGraphResponse($result->toArray());
    }
}
