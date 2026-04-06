<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterDaemonTaskDefinition;

trait RegisterDaemonTaskDefinitionTrait
{
    /**
     * @param RegisterDaemonTaskDefinitionRequest $args
     * @return RegisterDaemonTaskDefinitionResponse
     */
    public function registerDaemonTaskDefinition(RegisterDaemonTaskDefinitionRequest $args)
    {
        $result = parent::registerDaemonTaskDefinition($args->toArray());
        return new RegisterDaemonTaskDefinitionResponse($result->toArray());
    }
}
