<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition;

trait CreateContainerGroupDefinitionTrait
{
    /**
     * @param CreateContainerGroupDefinitionRequest $args
     * @return CreateContainerGroupDefinitionResponse
     */
    public function createContainerGroupDefinition(CreateContainerGroupDefinitionRequest $args)
    {
        $result = parent::createContainerGroupDefinition($args->toArray());
        return new CreateContainerGroupDefinitionResponse($result->toArray());
    }
}
