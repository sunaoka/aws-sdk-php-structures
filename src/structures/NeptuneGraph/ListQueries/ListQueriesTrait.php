<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListQueries;

trait ListQueriesTrait
{
    /**
     * @param ListQueriesRequest $args
     * @return ListQueriesResponse
     */
    public function listQueries(ListQueriesRequest $args)
    {
        $result = parent::listQueries($args->toArray());
        return new ListQueriesResponse($result->toArray());
    }
}
