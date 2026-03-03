<?php

namespace Sunaoka\Aws\Structures\DataZone\QueryGraph;

trait QueryGraphTrait
{
    /**
     * @param QueryGraphRequest $args
     * @return QueryGraphResponse
     */
    public function queryGraph(QueryGraphRequest $args)
    {
        $result = parent::queryGraph($args->toArray());
        return new QueryGraphResponse($result->toArray());
    }
}
