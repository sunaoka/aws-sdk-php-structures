<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteResourceDefinition;

trait DeleteResourceDefinitionTrait
{
    /**
     * @param DeleteResourceDefinitionRequest $args
     * @return DeleteResourceDefinitionResponse
     */
    public function deleteResourceDefinition(DeleteResourceDefinitionRequest $args)
    {
        $result = parent::deleteResourceDefinition($args->toArray());
        return new DeleteResourceDefinitionResponse($result->toArray());
    }
}
