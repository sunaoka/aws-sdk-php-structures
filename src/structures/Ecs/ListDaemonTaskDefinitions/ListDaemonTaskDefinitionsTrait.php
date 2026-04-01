<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemonTaskDefinitions;

trait ListDaemonTaskDefinitionsTrait
{
    /**
     * @param ListDaemonTaskDefinitionsRequest $args
     * @return ListDaemonTaskDefinitionsResponse
     */
    public function listDaemonTaskDefinitions(ListDaemonTaskDefinitionsRequest $args)
    {
        $result = parent::listDaemonTaskDefinitions($args->toArray());
        return new ListDaemonTaskDefinitionsResponse($result->toArray());
    }
}
