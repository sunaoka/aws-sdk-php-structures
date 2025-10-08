<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListGroupingAttributeDefinitions;

trait ListGroupingAttributeDefinitionsTrait
{
    /**
     * @param ListGroupingAttributeDefinitionsRequest $args
     * @return ListGroupingAttributeDefinitionsResponse
     */
    public function listGroupingAttributeDefinitions(ListGroupingAttributeDefinitionsRequest $args)
    {
        $result = parent::listGroupingAttributeDefinitions($args->toArray());
        return new ListGroupingAttributeDefinitionsResponse($result->toArray());
    }
}
