<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataflowGraph;

trait GetDataflowGraphTrait
{
    /**
     * @param GetDataflowGraphRequest $args
     * @return GetDataflowGraphResponse
     */
    public function getDataflowGraph(GetDataflowGraphRequest $args)
    {
        $result = parent::getDataflowGraph($args->toArray());
        return new GetDataflowGraphResponse($result->toArray());
    }
}
