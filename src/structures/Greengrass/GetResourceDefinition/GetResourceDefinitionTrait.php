<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinition;

trait GetResourceDefinitionTrait
{
    /**
     * @param GetResourceDefinitionRequest $args
     * @return GetResourceDefinitionResponse
     */
    public function getResourceDefinition(GetResourceDefinitionRequest $args)
    {
        $result = parent::getResourceDefinition($args->toArray());
        return new GetResourceDefinitionResponse($result->toArray());
    }
}
