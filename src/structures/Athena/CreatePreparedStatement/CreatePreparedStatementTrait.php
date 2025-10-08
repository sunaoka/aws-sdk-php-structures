<?php

namespace Sunaoka\Aws\Structures\Athena\CreatePreparedStatement;

trait CreatePreparedStatementTrait
{
    /**
     * @param CreatePreparedStatementRequest $args
     * @return CreatePreparedStatementResponse
     */
    public function createPreparedStatement(CreatePreparedStatementRequest $args)
    {
        $result = parent::createPreparedStatement($args->toArray());
        return new CreatePreparedStatementResponse($result->toArray());
    }
}
