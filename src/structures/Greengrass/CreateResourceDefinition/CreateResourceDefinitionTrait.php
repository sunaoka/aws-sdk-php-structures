<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition;

trait CreateResourceDefinitionTrait
{
    /**
     * @param CreateResourceDefinitionRequest $args
     * @return CreateResourceDefinitionResponse
     */
    public function createResourceDefinition(CreateResourceDefinitionRequest $args)
    {
        $result = parent::createResourceDefinition($args->toArray());
        return new CreateResourceDefinitionResponse($result->toArray());
    }
}
