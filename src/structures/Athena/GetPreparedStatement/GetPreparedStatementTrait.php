<?php

namespace Sunaoka\Aws\Structures\Athena\GetPreparedStatement;

trait GetPreparedStatementTrait
{
    /**
     * @param GetPreparedStatementRequest $args
     * @return GetPreparedStatementResponse
     */
    public function getPreparedStatement(GetPreparedStatementRequest $args)
    {
        $result = parent::getPreparedStatement($args->toArray());
        return new GetPreparedStatementResponse($result->toArray());
    }
}
