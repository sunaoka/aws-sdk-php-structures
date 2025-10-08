<?php

namespace Sunaoka\Aws\Structures\Athena\UpdatePreparedStatement;

trait UpdatePreparedStatementTrait
{
    /**
     * @param UpdatePreparedStatementRequest $args
     * @return UpdatePreparedStatementResponse
     */
    public function updatePreparedStatement(UpdatePreparedStatementRequest $args)
    {
        $result = parent::updatePreparedStatement($args->toArray());
        return new UpdatePreparedStatementResponse($result->toArray());
    }
}
