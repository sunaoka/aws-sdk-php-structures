<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerGroupDefinition;

trait UpdateContainerGroupDefinitionTrait
{
    /**
     * @param UpdateContainerGroupDefinitionRequest $args
     * @return UpdateContainerGroupDefinitionResponse
     */
    public function updateContainerGroupDefinition(UpdateContainerGroupDefinitionRequest $args)
    {
        $result = parent::updateContainerGroupDefinition($args->toArray());
        return new UpdateContainerGroupDefinitionResponse($result->toArray());
    }
}
