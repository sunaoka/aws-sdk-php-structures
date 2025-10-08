<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeletePolicyStatement;

trait DeletePolicyStatementTrait
{
    /**
     * @param DeletePolicyStatementRequest $args
     * @return DeletePolicyStatementResponse
     */
    public function deletePolicyStatement(DeletePolicyStatementRequest $args)
    {
        $result = parent::deletePolicyStatement($args->toArray());
        return new DeletePolicyStatementResponse($result->toArray());
    }
}
