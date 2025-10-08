<?php

namespace Sunaoka\Aws\Structures\Athena\ListQueryExecutions;

trait ListQueryExecutionsTrait
{
    /**
     * @param ListQueryExecutionsRequest $args
     * @return ListQueryExecutionsResponse
     */
    public function listQueryExecutions(ListQueryExecutionsRequest $args)
    {
        $result = parent::listQueryExecutions($args->toArray());
        return new ListQueryExecutionsResponse($result->toArray());
    }
}
