<?php

namespace Sunaoka\Aws\Structures\Comprehend\ContainsPiiEntities;

trait ContainsPiiEntitiesTrait
{
    /**
     * @param ContainsPiiEntitiesRequest $args
     * @return ContainsPiiEntitiesResponse
     */
    public function containsPiiEntities(ContainsPiiEntitiesRequest $args)
    {
        $result = parent::containsPiiEntities($args->toArray());
        return new ContainsPiiEntitiesResponse($result->toArray());
    }
}
