<?php

namespace Sunaoka\Aws\Structures\Ecs\ListTaskDefinitionFamilies;

trait ListTaskDefinitionFamiliesTrait
{
    /**
     * @param ListTaskDefinitionFamiliesRequest $args
     * @return ListTaskDefinitionFamiliesResponse
     */
    public function listTaskDefinitionFamilies(ListTaskDefinitionFamiliesRequest $args)
    {
        $result = parent::listTaskDefinitionFamilies($args->toArray());
        return new ListTaskDefinitionFamiliesResponse($result->toArray());
    }
}
