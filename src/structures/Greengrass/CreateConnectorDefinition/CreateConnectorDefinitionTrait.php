<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateConnectorDefinition;

trait CreateConnectorDefinitionTrait
{
    /**
     * @param CreateConnectorDefinitionRequest $args
     * @return CreateConnectorDefinitionResponse
     */
    public function createConnectorDefinition(CreateConnectorDefinitionRequest $args)
    {
        $result = parent::createConnectorDefinition($args->toArray());
        return new CreateConnectorDefinitionResponse($result->toArray());
    }
}
