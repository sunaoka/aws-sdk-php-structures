<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateCalculatedAttributeDefinition;

trait CreateCalculatedAttributeDefinitionTrait
{
    /**
     * @param CreateCalculatedAttributeDefinitionRequest $args
     * @return CreateCalculatedAttributeDefinitionResponse
     */
    public function createCalculatedAttributeDefinition(CreateCalculatedAttributeDefinitionRequest $args)
    {
        $result = parent::createCalculatedAttributeDefinition($args->toArray());
        return new CreateCalculatedAttributeDefinitionResponse($result->toArray());
    }
}
