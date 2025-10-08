<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteConnectorDefinition;

trait DeleteConnectorDefinitionTrait
{
    /**
     * @param DeleteConnectorDefinitionRequest $args
     * @return DeleteConnectorDefinitionResponse
     */
    public function deleteConnectorDefinition(DeleteConnectorDefinitionRequest $args)
    {
        $result = parent::deleteConnectorDefinition($args->toArray());
        return new DeleteConnectorDefinitionResponse($result->toArray());
    }
}
