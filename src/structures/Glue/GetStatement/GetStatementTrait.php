<?php

namespace Sunaoka\Aws\Structures\Glue\GetStatement;

trait GetStatementTrait
{
    /**
     * @param GetStatementRequest $args
     * @return GetStatementResponse
     */
    public function getStatement(GetStatementRequest $args)
    {
        $result = parent::getStatement($args->toArray());
        return new GetStatementResponse($result->toArray());
    }
}
