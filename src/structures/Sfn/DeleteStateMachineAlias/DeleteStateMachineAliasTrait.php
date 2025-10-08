<?php

namespace Sunaoka\Aws\Structures\Sfn\DeleteStateMachineAlias;

trait DeleteStateMachineAliasTrait
{
    /**
     * @param DeleteStateMachineAliasRequest $args
     * @return DeleteStateMachineAliasResponse
     */
    public function deleteStateMachineAlias(DeleteStateMachineAliasRequest $args)
    {
        $result = parent::deleteStateMachineAlias($args->toArray());
        return new DeleteStateMachineAliasResponse($result->toArray());
    }
}
