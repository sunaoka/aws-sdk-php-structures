<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartGraph;

trait StartGraphTrait
{
    /**
     * @param StartGraphRequest $args
     * @return StartGraphResponse
     */
    public function startGraph(StartGraphRequest $args)
    {
        $result = parent::startGraph($args->toArray());
        return new StartGraphResponse($result->toArray());
    }
}
