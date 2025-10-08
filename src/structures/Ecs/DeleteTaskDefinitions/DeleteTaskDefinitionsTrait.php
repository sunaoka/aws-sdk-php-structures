<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions;

trait DeleteTaskDefinitionsTrait
{
    /**
     * @param DeleteTaskDefinitionsRequest $args
     * @return DeleteTaskDefinitionsResponse
     */
    public function deleteTaskDefinitions(DeleteTaskDefinitionsRequest $args)
    {
        $result = parent::deleteTaskDefinitions($args->toArray());
        return new DeleteTaskDefinitionsResponse($result->toArray());
    }
}
