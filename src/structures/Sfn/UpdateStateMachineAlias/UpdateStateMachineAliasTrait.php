<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachineAlias;

trait UpdateStateMachineAliasTrait
{
    /**
     * @param UpdateStateMachineAliasRequest $args
     * @return UpdateStateMachineAliasResponse
     */
    public function updateStateMachineAlias(UpdateStateMachineAliasRequest $args)
    {
        $result = parent::updateStateMachineAlias($args->toArray());
        return new UpdateStateMachineAliasResponse($result->toArray());
    }
}
