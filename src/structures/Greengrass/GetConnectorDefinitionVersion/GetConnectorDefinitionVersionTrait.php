<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectorDefinitionVersion;

trait GetConnectorDefinitionVersionTrait
{
    /**
     * @param GetConnectorDefinitionVersionRequest $args
     * @return GetConnectorDefinitionVersionResponse
     */
    public function getConnectorDefinitionVersion(GetConnectorDefinitionVersionRequest $args)
    {
        $result = parent::getConnectorDefinitionVersion($args->toArray());
        return new GetConnectorDefinitionVersionResponse($result->toArray());
    }
}
