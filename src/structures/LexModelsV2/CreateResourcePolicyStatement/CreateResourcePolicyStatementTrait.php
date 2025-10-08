<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateResourcePolicyStatement;

trait CreateResourcePolicyStatementTrait
{
    /**
     * @param CreateResourcePolicyStatementRequest $args
     * @return CreateResourcePolicyStatementResponse
     */
    public function createResourcePolicyStatement(CreateResourcePolicyStatementRequest $args)
    {
        $result = parent::createResourcePolicyStatement($args->toArray());
        return new CreateResourcePolicyStatementResponse($result->toArray());
    }
}
