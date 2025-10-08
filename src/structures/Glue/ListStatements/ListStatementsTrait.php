<?php

namespace Sunaoka\Aws\Structures\Glue\ListStatements;

trait ListStatementsTrait
{
    /**
     * @param ListStatementsRequest $args
     * @return ListStatementsResponse
     */
    public function listStatements(ListStatementsRequest $args)
    {
        $result = parent::listStatements($args->toArray());
        return new ListStatementsResponse($result->toArray());
    }
}
