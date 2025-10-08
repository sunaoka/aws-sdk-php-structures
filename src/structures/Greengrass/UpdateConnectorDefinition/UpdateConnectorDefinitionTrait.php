<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateConnectorDefinition;

trait UpdateConnectorDefinitionTrait
{
    /**
     * @param UpdateConnectorDefinitionRequest $args
     * @return UpdateConnectorDefinitionResponse
     */
    public function updateConnectorDefinition(UpdateConnectorDefinitionRequest $args)
    {
        $result = parent::updateConnectorDefinition($args->toArray());
        return new UpdateConnectorDefinitionResponse($result->toArray());
    }
}
