<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegments;

trait ListSegmentsTrait
{
    /**
     * @param ListSegmentsRequest $args
     * @return ListSegmentsResponse
     */
    public function listSegments(ListSegmentsRequest $args)
    {
        $result = parent::listSegments($args->toArray());
        return new ListSegmentsResponse($result->toArray());
    }
}
