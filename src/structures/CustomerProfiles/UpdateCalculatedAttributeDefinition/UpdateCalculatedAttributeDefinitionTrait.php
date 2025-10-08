<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition;

trait UpdateCalculatedAttributeDefinitionTrait
{
    /**
     * @param UpdateCalculatedAttributeDefinitionRequest $args
     * @return UpdateCalculatedAttributeDefinitionResponse
     */
    public function updateCalculatedAttributeDefinition(UpdateCalculatedAttributeDefinitionRequest $args)
    {
        $result = parent::updateCalculatedAttributeDefinition($args->toArray());
        return new UpdateCalculatedAttributeDefinitionResponse($result->toArray());
    }
}
