<?php

namespace Sunaoka\Aws\Structures\Athena\ListNamedQueries;

trait ListNamedQueriesTrait
{
    /**
     * @param ListNamedQueriesRequest $args
     * @return ListNamedQueriesResponse
     */
    public function listNamedQueries(ListNamedQueriesRequest $args)
    {
        $result = parent::listNamedQueries($args->toArray());
        return new ListNamedQueriesResponse($result->toArray());
    }
}
