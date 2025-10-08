<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListCalculatedAttributeDefinitions;

trait ListCalculatedAttributeDefinitionsTrait
{
    /**
     * @param ListCalculatedAttributeDefinitionsRequest $args
     * @return ListCalculatedAttributeDefinitionsResponse
     */
    public function listCalculatedAttributeDefinitions(ListCalculatedAttributeDefinitionsRequest $args)
    {
        $result = parent::listCalculatedAttributeDefinitions($args->toArray());
        return new ListCalculatedAttributeDefinitionsResponse($result->toArray());
    }
}
