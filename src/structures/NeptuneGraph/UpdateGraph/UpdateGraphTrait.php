<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\UpdateGraph;

trait UpdateGraphTrait
{
    /**
     * @param UpdateGraphRequest $args
     * @return UpdateGraphResponse
     */
    public function updateGraph(UpdateGraphRequest $args)
    {
        $result = parent::updateGraph($args->toArray());
        return new UpdateGraphResponse($result->toArray());
    }
}
