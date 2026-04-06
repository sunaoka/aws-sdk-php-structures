<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ResetGraph;

trait ResetGraphTrait
{
    /**
     * @param ResetGraphRequest $args
     * @return ResetGraphResponse
     */
    public function resetGraph(ResetGraphRequest $args)
    {
        $result = parent::resetGraph($args->toArray());
        return new ResetGraphResponse($result->toArray());
    }
}
