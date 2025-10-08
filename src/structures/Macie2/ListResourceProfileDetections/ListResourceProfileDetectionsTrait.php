<?php

namespace Sunaoka\Aws\Structures\Macie2\ListResourceProfileDetections;

trait ListResourceProfileDetectionsTrait
{
    /**
     * @param ListResourceProfileDetectionsRequest $args
     * @return ListResourceProfileDetectionsResponse
     */
    public function listResourceProfileDetections(ListResourceProfileDetectionsRequest $args)
    {
        $result = parent::listResourceProfileDetections($args->toArray());
        return new ListResourceProfileDetectionsResponse($result->toArray());
    }
}
