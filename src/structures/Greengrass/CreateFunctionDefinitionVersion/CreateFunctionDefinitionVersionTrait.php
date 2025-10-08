<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinitionVersion;

trait CreateFunctionDefinitionVersionTrait
{
    /**
     * @param CreateFunctionDefinitionVersionRequest $args
     * @return CreateFunctionDefinitionVersionResponse
     */
    public function createFunctionDefinitionVersion(CreateFunctionDefinitionVersionRequest $args)
    {
        $result = parent::createFunctionDefinitionVersion($args->toArray());
        return new CreateFunctionDefinitionVersionResponse($result->toArray());
    }
}
