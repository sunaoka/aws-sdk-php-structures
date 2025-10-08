<?php

namespace Sunaoka\Aws\Structures\Detective\CreateGraph;

trait CreateGraphTrait
{
    /**
     * @param CreateGraphRequest $args
     * @return CreateGraphResponse
     */
    public function createGraph(CreateGraphRequest $args)
    {
        $result = parent::createGraph($args->toArray());
        return new CreateGraphResponse($result->toArray());
    }
}
