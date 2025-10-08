<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion;

trait GetFunctionDefinitionVersionTrait
{
    /**
     * @param GetFunctionDefinitionVersionRequest $args
     * @return GetFunctionDefinitionVersionResponse
     */
    public function getFunctionDefinitionVersion(GetFunctionDefinitionVersionRequest $args)
    {
        $result = parent::getFunctionDefinitionVersion($args->toArray());
        return new GetFunctionDefinitionVersionResponse($result->toArray());
    }
}
