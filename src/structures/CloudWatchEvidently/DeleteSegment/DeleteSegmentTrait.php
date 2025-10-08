<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteSegment;

trait DeleteSegmentTrait
{
    /**
     * @param DeleteSegmentRequest $args
     * @return DeleteSegmentResponse
     */
    public function deleteSegment(DeleteSegmentRequest $args)
    {
        $result = parent::deleteSegment($args->toArray());
        return new DeleteSegmentResponse($result->toArray());
    }
}
