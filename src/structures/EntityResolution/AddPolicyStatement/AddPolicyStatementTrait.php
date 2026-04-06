<?php

namespace Sunaoka\Aws\Structures\EntityResolution\AddPolicyStatement;

trait AddPolicyStatementTrait
{
    /**
     * @param AddPolicyStatementRequest $args
     * @return AddPolicyStatementResponse
     */
    public function addPolicyStatement(AddPolicyStatementRequest $args)
    {
        $result = parent::addPolicyStatement($args->toArray());
        return new AddPolicyStatementResponse($result->toArray());
    }
}
