<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities;

trait DetectEntitiesTrait
{
    /**
     * @param DetectEntitiesRequest $args
     * @return DetectEntitiesResponse
     */
    public function detectEntities(DetectEntitiesRequest $args)
    {
        $result = parent::detectEntities($args->toArray());
        return new DetectEntitiesResponse($result->toArray());
    }
}
