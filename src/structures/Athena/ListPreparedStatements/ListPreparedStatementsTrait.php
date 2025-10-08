<?php

namespace Sunaoka\Aws\Structures\Athena\ListPreparedStatements;

trait ListPreparedStatementsTrait
{
    /**
     * @param ListPreparedStatementsRequest $args
     * @return ListPreparedStatementsResponse
     */
    public function listPreparedStatements(ListPreparedStatementsRequest $args)
    {
        $result = parent::listPreparedStatements($args->toArray());
        return new ListPreparedStatementsResponse($result->toArray());
    }
}
