<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSegment;

trait UpdateSegmentTrait
{
    /**
     * @param UpdateSegmentRequest $args
     * @return UpdateSegmentResponse
     */
    public function updateSegment(UpdateSegmentRequest $args)
    {
        $result = parent::updateSegment($args->toArray());
        return new UpdateSegmentResponse($result->toArray());
    }
}
