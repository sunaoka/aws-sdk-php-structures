<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions;

trait ListContainerGroupDefinitionsTrait
{
    /**
     * @param ListContainerGroupDefinitionsRequest $args
     * @return ListContainerGroupDefinitionsResponse
     */
    public function listContainerGroupDefinitions(ListContainerGroupDefinitionsRequest $args)
    {
        $result = parent::listContainerGroupDefinitions($args->toArray());
        return new ListContainerGroupDefinitionsResponse($result->toArray());
    }
}
