<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteResourcePolicyStatement;

trait DeleteResourcePolicyStatementTrait
{
    /**
     * @param DeleteResourcePolicyStatementRequest $args
     * @return DeleteResourcePolicyStatementResponse
     */
    public function deleteResourcePolicyStatement(DeleteResourcePolicyStatementRequest $args)
    {
        $result = parent::deleteResourcePolicyStatement($args->toArray());
        return new DeleteResourcePolicyStatementResponse($result->toArray());
    }
}
