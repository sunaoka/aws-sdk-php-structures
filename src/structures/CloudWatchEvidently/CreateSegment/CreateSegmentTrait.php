<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateSegment;

trait CreateSegmentTrait
{
    /**
     * @param CreateSegmentRequest $args
     * @return CreateSegmentResponse
     */
    public function createSegment(CreateSegmentRequest $args)
    {
        $result = parent::createSegment($args->toArray());
        return new CreateSegmentResponse($result->toArray());
    }
}
