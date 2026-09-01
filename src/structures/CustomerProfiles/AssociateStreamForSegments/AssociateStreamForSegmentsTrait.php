<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\AssociateStreamForSegments;

trait AssociateStreamForSegmentsTrait
{
    /**
     * @param AssociateStreamForSegmentsRequest $args
     * @return AssociateStreamForSegmentsResponse
     */
    public function associateStreamForSegments(AssociateStreamForSegmentsRequest $args)
    {
        $result = parent::associateStreamForSegments($args->toArray());
        return new AssociateStreamForSegmentsResponse($result->toArray());
    }
}
