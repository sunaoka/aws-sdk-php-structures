<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateStateMachineAlias;

trait CreateStateMachineAliasTrait
{
    /**
     * @param CreateStateMachineAliasRequest $args
     * @return CreateStateMachineAliasResponse
     */
    public function createStateMachineAlias(CreateStateMachineAliasRequest $args)
    {
        $result = parent::createStateMachineAlias($args->toArray());
        return new CreateStateMachineAliasResponse($result->toArray());
    }
}
