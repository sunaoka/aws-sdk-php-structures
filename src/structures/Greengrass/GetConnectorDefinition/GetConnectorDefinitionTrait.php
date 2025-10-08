<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectorDefinition;

trait GetConnectorDefinitionTrait
{
    /**
     * @param GetConnectorDefinitionRequest $args
     * @return GetConnectorDefinitionResponse
     */
    public function getConnectorDefinition(GetConnectorDefinitionRequest $args)
    {
        $result = parent::getConnectorDefinition($args->toArray());
        return new GetConnectorDefinitionResponse($result->toArray());
    }
}
