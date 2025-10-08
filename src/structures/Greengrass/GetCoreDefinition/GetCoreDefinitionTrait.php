<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetCoreDefinition;

trait GetCoreDefinitionTrait
{
    /**
     * @param GetCoreDefinitionRequest $args
     * @return GetCoreDefinitionResponse
     */
    public function getCoreDefinition(GetCoreDefinitionRequest $args)
    {
        $result = parent::getCoreDefinition($args->toArray());
        return new GetCoreDefinitionResponse($result->toArray());
    }
}
