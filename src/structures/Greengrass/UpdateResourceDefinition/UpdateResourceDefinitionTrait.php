<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateResourceDefinition;

trait UpdateResourceDefinitionTrait
{
    /**
     * @param UpdateResourceDefinitionRequest $args
     * @return UpdateResourceDefinitionResponse
     */
    public function updateResourceDefinition(UpdateResourceDefinitionRequest $args)
    {
        $result = parent::updateResourceDefinition($args->toArray());
        return new UpdateResourceDefinitionResponse($result->toArray());
    }
}
