<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListResourceDefinitions;

trait ListResourceDefinitionsTrait
{
    /**
     * @param ListResourceDefinitionsRequest $args
     * @return ListResourceDefinitionsResponse
     */
    public function listResourceDefinitions(ListResourceDefinitionsRequest $args)
    {
        $result = parent::listResourceDefinitions($args->toArray());
        return new ListResourceDefinitionsResponse($result->toArray());
    }
}
