<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition;

trait RegisterTaskDefinitionTrait
{
    /**
     * @param RegisterTaskDefinitionRequest $args
     * @return RegisterTaskDefinitionResponse
     */
    public function registerTaskDefinition(RegisterTaskDefinitionRequest $args)
    {
        $result = parent::registerTaskDefinition($args->toArray());
        return new RegisterTaskDefinitionResponse($result->toArray());
    }
}
