<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteCalculatedAttributeDefinition;

trait DeleteCalculatedAttributeDefinitionTrait
{
    /**
     * @param DeleteCalculatedAttributeDefinitionRequest $args
     * @return DeleteCalculatedAttributeDefinitionResponse
     */
    public function deleteCalculatedAttributeDefinition(DeleteCalculatedAttributeDefinitionRequest $args)
    {
        $result = parent::deleteCalculatedAttributeDefinition($args->toArray());
        return new DeleteCalculatedAttributeDefinitionResponse($result->toArray());
    }
}
