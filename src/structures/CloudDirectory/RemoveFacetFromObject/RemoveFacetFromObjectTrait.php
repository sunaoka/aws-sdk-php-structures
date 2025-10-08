<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\RemoveFacetFromObject;

trait RemoveFacetFromObjectTrait
{
    /**
     * @param RemoveFacetFromObjectRequest $args
     * @return RemoveFacetFromObjectResponse
     */
    public function removeFacetFromObject(RemoveFacetFromObjectRequest $args)
    {
        $result = parent::removeFacetFromObject($args->toArray());
        return new RemoveFacetFromObjectResponse($result->toArray());
    }
}
