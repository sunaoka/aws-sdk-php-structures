<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateResourceProfileDetections;

trait UpdateResourceProfileDetectionsTrait
{
    /**
     * @param UpdateResourceProfileDetectionsRequest $args
     * @return UpdateResourceProfileDetectionsResponse
     */
    public function updateResourceProfileDetections(UpdateResourceProfileDetectionsRequest $args)
    {
        $result = parent::updateResourceProfileDetections($args->toArray());
        return new UpdateResourceProfileDetectionsResponse($result->toArray());
    }
}
