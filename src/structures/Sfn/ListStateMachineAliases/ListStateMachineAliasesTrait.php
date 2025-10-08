<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachineAliases;

trait ListStateMachineAliasesTrait
{
    /**
     * @param ListStateMachineAliasesRequest $args
     * @return ListStateMachineAliasesResponse
     */
    public function listStateMachineAliases(ListStateMachineAliasesRequest $args)
    {
        $result = parent::listStateMachineAliases($args->toArray());
        return new ListStateMachineAliasesResponse($result->toArray());
    }
}
