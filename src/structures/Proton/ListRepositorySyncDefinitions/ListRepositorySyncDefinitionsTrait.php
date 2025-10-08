<?php

namespace Sunaoka\Aws\Structures\Proton\ListRepositorySyncDefinitions;

trait ListRepositorySyncDefinitionsTrait
{
    /**
     * @param ListRepositorySyncDefinitionsRequest $args
     * @return ListRepositorySyncDefinitionsResponse
     */
    public function listRepositorySyncDefinitions(ListRepositorySyncDefinitionsRequest $args)
    {
        $result = parent::listRepositorySyncDefinitions($args->toArray());
        return new ListRepositorySyncDefinitionsResponse($result->toArray());
    }
}
