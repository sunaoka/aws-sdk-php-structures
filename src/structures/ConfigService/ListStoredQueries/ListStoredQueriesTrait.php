<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListStoredQueries;

trait ListStoredQueriesTrait
{
    /**
     * @param ListStoredQueriesRequest $args
     * @return ListStoredQueriesResponse
     */
    public function listStoredQueries(ListStoredQueriesRequest $args)
    {
        $result = parent::listStoredQueries($args->toArray());
        return new ListStoredQueriesResponse($result->toArray());
    }
}
