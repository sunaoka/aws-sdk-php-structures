<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition;

trait DeregisterTaskDefinitionTrait
{
    /**
     * @param DeregisterTaskDefinitionRequest $args
     * @return DeregisterTaskDefinitionResponse
     */
    public function deregisterTaskDefinition(DeregisterTaskDefinitionRequest $args)
    {
        $result = parent::deregisterTaskDefinition($args->toArray());
        return new DeregisterTaskDefinitionResponse($result->toArray());
    }
}
