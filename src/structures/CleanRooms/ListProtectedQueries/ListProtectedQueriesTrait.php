<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedQueries;

trait ListProtectedQueriesTrait
{
    /**
     * @param ListProtectedQueriesRequest $args
     * @return ListProtectedQueriesResponse
     */
    public function listProtectedQueries(ListProtectedQueriesRequest $args)
    {
        $result = parent::listProtectedQueries($args->toArray());
        return new ListProtectedQueriesResponse($result->toArray());
    }
}
