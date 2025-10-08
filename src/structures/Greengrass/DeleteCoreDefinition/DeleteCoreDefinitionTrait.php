<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteCoreDefinition;

trait DeleteCoreDefinitionTrait
{
    /**
     * @param DeleteCoreDefinitionRequest $args
     * @return DeleteCoreDefinitionResponse
     */
    public function deleteCoreDefinition(DeleteCoreDefinitionRequest $args)
    {
        $result = parent::deleteCoreDefinition($args->toArray());
        return new DeleteCoreDefinitionResponse($result->toArray());
    }
}
