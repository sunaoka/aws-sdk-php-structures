<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateCoreDefinition;

trait UpdateCoreDefinitionTrait
{
    /**
     * @param UpdateCoreDefinitionRequest $args
     * @return UpdateCoreDefinitionResponse
     */
    public function updateCoreDefinition(UpdateCoreDefinitionRequest $args)
    {
        $result = parent::updateCoreDefinition($args->toArray());
        return new UpdateCoreDefinitionResponse($result->toArray());
    }
}
