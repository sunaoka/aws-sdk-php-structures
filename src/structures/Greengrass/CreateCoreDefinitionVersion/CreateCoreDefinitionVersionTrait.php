<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateCoreDefinitionVersion;

trait CreateCoreDefinitionVersionTrait
{
    /**
     * @param CreateCoreDefinitionVersionRequest $args
     * @return CreateCoreDefinitionVersionResponse
     */
    public function createCoreDefinitionVersion(CreateCoreDefinitionVersionRequest $args)
    {
        $result = parent::createCoreDefinitionVersion($args->toArray());
        return new CreateCoreDefinitionVersionResponse($result->toArray());
    }
}
