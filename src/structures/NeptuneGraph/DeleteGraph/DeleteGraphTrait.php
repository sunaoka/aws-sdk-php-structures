<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\DeleteGraph;

trait DeleteGraphTrait
{
    /**
     * @param DeleteGraphRequest $args
     * @return DeleteGraphResponse
     */
    public function deleteGraph(DeleteGraphRequest $args)
    {
        $result = parent::deleteGraph($args->toArray());
        return new DeleteGraphResponse($result->toArray());
    }
}
