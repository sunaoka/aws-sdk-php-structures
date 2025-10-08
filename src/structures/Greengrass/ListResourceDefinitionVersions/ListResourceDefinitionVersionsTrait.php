<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListResourceDefinitionVersions;

trait ListResourceDefinitionVersionsTrait
{
    /**
     * @param ListResourceDefinitionVersionsRequest $args
     * @return ListResourceDefinitionVersionsResponse
     */
    public function listResourceDefinitionVersions(ListResourceDefinitionVersionsRequest $args)
    {
        $result = parent::listResourceDefinitionVersions($args->toArray());
        return new ListResourceDefinitionVersionsResponse($result->toArray());
    }
}
