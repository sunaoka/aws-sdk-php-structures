<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteContainerGroupDefinition;

trait DeleteContainerGroupDefinitionTrait
{
    /**
     * @param DeleteContainerGroupDefinitionRequest $args
     * @return DeleteContainerGroupDefinitionResponse
     */
    public function deleteContainerGroupDefinition(DeleteContainerGroupDefinitionRequest $args)
    {
        $result = parent::deleteContainerGroupDefinition($args->toArray());
        return new DeleteContainerGroupDefinitionResponse($result->toArray());
    }
}
