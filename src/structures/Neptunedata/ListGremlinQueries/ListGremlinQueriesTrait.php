<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListGremlinQueries;

trait ListGremlinQueriesTrait
{
    /**
     * @param ListGremlinQueriesRequest $args
     * @return ListGremlinQueriesResponse
     */
    public function listGremlinQueries(ListGremlinQueriesRequest $args)
    {
        $result = parent::listGremlinQueries($args->toArray());
        return new ListGremlinQueriesResponse($result->toArray());
    }
}
