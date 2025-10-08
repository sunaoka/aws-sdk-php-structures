<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectPiiEntities;

trait DetectPiiEntitiesTrait
{
    /**
     * @param DetectPiiEntitiesRequest $args
     * @return DetectPiiEntitiesResponse
     */
    public function detectPiiEntities(DetectPiiEntitiesRequest $args)
    {
        $result = parent::detectPiiEntities($args->toArray());
        return new DetectPiiEntitiesResponse($result->toArray());
    }
}
