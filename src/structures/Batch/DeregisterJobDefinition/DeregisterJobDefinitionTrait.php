<?php

namespace Sunaoka\Aws\Structures\Batch\DeregisterJobDefinition;

trait DeregisterJobDefinitionTrait
{
    /**
     * @param DeregisterJobDefinitionRequest $args
     * @return DeregisterJobDefinitionResponse
     */
    public function deregisterJobDefinition(DeregisterJobDefinitionRequest $args)
    {
        $result = parent::deregisterJobDefinition($args->toArray());
        return new DeregisterJobDefinitionResponse($result->toArray());
    }
}
