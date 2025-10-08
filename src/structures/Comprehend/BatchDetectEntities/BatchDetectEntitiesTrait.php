<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectEntities;

trait BatchDetectEntitiesTrait
{
    /**
     * @param BatchDetectEntitiesRequest $args
     * @return BatchDetectEntitiesResponse
     */
    public function batchDetectEntities(BatchDetectEntitiesRequest $args)
    {
        $result = parent::batchDetectEntities($args->toArray());
        return new BatchDetectEntitiesResponse($result->toArray());
    }
}
