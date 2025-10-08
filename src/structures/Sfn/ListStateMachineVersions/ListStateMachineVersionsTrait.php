<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachineVersions;

trait ListStateMachineVersionsTrait
{
    /**
     * @param ListStateMachineVersionsRequest $args
     * @return ListStateMachineVersionsResponse
     */
    public function listStateMachineVersions(ListStateMachineVersionsRequest $args)
    {
        $result = parent::listStateMachineVersions($args->toArray());
        return new ListStateMachineVersionsResponse($result->toArray());
    }
}
