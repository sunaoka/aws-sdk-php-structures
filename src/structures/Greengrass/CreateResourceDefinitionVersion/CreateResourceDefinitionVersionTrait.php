<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinitionVersion;

trait CreateResourceDefinitionVersionTrait
{
    /**
     * @param CreateResourceDefinitionVersionRequest $args
     * @return CreateResourceDefinitionVersionResponse
     */
    public function createResourceDefinitionVersion(CreateResourceDefinitionVersionRequest $args)
    {
        $result = parent::createResourceDefinitionVersion($args->toArray());
        return new CreateResourceDefinitionVersionResponse($result->toArray());
    }
}
