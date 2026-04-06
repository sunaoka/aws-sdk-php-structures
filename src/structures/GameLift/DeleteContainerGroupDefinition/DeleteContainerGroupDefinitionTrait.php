<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteContainerGroupDefinition;

trait DeleteContainerGroupDefinitionTrait
{
    /**
     * @param DeleteContainerGroupDefinitionRequest $args
     * @return void
     */
    public function deleteContainerGroupDefinition(DeleteContainerGroupDefinitionRequest $args)
    {
        parent::deleteContainerGroupDefinition($args->toArray());
    }
}
