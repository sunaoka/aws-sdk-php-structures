<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StopGraph;

trait StopGraphTrait
{
    /**
     * @param StopGraphRequest $args
     * @return StopGraphResponse
     */
    public function stopGraph(StopGraphRequest $args)
    {
        $result = parent::stopGraph($args->toArray());
        return new StopGraphResponse($result->toArray());
    }
}
