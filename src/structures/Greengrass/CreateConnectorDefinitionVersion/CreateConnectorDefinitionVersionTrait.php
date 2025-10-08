<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateConnectorDefinitionVersion;

trait CreateConnectorDefinitionVersionTrait
{
    /**
     * @param CreateConnectorDefinitionVersionRequest $args
     * @return CreateConnectorDefinitionVersionResponse
     */
    public function createConnectorDefinitionVersion(CreateConnectorDefinitionVersionRequest $args)
    {
        $result = parent::createConnectorDefinitionVersion($args->toArray());
        return new CreateConnectorDefinitionVersionResponse($result->toArray());
    }
}
