<?php

namespace Sunaoka\Aws\Structures\Glue\CancelStatement;

trait CancelStatementTrait
{
    /**
     * @param CancelStatementRequest $args
     * @return CancelStatementResponse
     */
    public function cancelStatement(CancelStatementRequest $args)
    {
        $result = parent::cancelStatement($args->toArray());
        return new CancelStatementResponse($result->toArray());
    }
}
