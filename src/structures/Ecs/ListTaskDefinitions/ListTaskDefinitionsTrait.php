<?php

namespace Sunaoka\Aws\Structures\Ecs\ListTaskDefinitions;

trait ListTaskDefinitionsTrait
{
    /**
     * @param ListTaskDefinitionsRequest $args
     * @return ListTaskDefinitionsResponse
     */
    public function listTaskDefinitions(ListTaskDefinitionsRequest $args)
    {
        $result = parent::listTaskDefinitions($args->toArray());
        return new ListTaskDefinitionsResponse($result->toArray());
    }
}
