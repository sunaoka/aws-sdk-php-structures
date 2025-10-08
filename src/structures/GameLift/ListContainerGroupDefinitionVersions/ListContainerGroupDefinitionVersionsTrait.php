<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitionVersions;

trait ListContainerGroupDefinitionVersionsTrait
{
    /**
     * @param ListContainerGroupDefinitionVersionsRequest $args
     * @return ListContainerGroupDefinitionVersionsResponse
     */
    public function listContainerGroupDefinitionVersions(ListContainerGroupDefinitionVersionsRequest $args)
    {
        $result = parent::listContainerGroupDefinitionVersions($args->toArray());
        return new ListContainerGroupDefinitionVersionsResponse($result->toArray());
    }
}
