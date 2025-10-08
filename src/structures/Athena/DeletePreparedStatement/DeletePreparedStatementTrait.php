<?php

namespace Sunaoka\Aws\Structures\Athena\DeletePreparedStatement;

trait DeletePreparedStatementTrait
{
    /**
     * @param DeletePreparedStatementRequest $args
     * @return DeletePreparedStatementResponse
     */
    public function deletePreparedStatement(DeletePreparedStatementRequest $args)
    {
        $result = parent::deletePreparedStatement($args->toArray());
        return new DeletePreparedStatementResponse($result->toArray());
    }
}
