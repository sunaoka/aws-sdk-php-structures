<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListOpenCypherQueries;

trait ListOpenCypherQueriesTrait
{
    /**
     * @param ListOpenCypherQueriesRequest $args
     * @return ListOpenCypherQueriesResponse
     */
    public function listOpenCypherQueries(ListOpenCypherQueriesRequest $args)
    {
        $result = parent::listOpenCypherQueries($args->toArray());
        return new ListOpenCypherQueriesResponse($result->toArray());
    }
}
