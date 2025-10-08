<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion;

trait GetResourceDefinitionVersionTrait
{
    /**
     * @param GetResourceDefinitionVersionRequest $args
     * @return GetResourceDefinitionVersionResponse
     */
    public function getResourceDefinitionVersion(GetResourceDefinitionVersionRequest $args)
    {
        $result = parent::getResourceDefinitionVersion($args->toArray());
        return new GetResourceDefinitionVersionResponse($result->toArray());
    }
}
