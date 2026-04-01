<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteDaemonTaskDefinition;

trait DeleteDaemonTaskDefinitionTrait
{
    /**
     * @param DeleteDaemonTaskDefinitionRequest $args
     * @return DeleteDaemonTaskDefinitionResponse
     */
    public function deleteDaemonTaskDefinition(DeleteDaemonTaskDefinitionRequest $args)
    {
        $result = parent::deleteDaemonTaskDefinition($args->toArray());
        return new DeleteDaemonTaskDefinitionResponse($result->toArray());
    }
}
