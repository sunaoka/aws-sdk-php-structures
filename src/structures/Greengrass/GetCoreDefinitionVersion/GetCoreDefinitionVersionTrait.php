<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetCoreDefinitionVersion;

trait GetCoreDefinitionVersionTrait
{
    /**
     * @param GetCoreDefinitionVersionRequest $args
     * @return GetCoreDefinitionVersionResponse
     */
    public function getCoreDefinitionVersion(GetCoreDefinitionVersionRequest $args)
    {
        $result = parent::getCoreDefinitionVersion($args->toArray());
        return new GetCoreDefinitionVersionResponse($result->toArray());
    }
}
