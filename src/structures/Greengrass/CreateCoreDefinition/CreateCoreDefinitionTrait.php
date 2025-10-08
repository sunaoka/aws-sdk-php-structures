<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateCoreDefinition;

trait CreateCoreDefinitionTrait
{
    /**
     * @param CreateCoreDefinitionRequest $args
     * @return CreateCoreDefinitionResponse
     */
    public function createCoreDefinition(CreateCoreDefinitionRequest $args)
    {
        $result = parent::createCoreDefinition($args->toArray());
        return new CreateCoreDefinitionResponse($result->toArray());
    }
}
