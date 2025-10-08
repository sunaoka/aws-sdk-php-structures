<?php

namespace Sunaoka\Aws\Structures\XRay\PutTraceSegments;

trait PutTraceSegmentsTrait
{
    /**
     * @param PutTraceSegmentsRequest $args
     * @return PutTraceSegmentsResponse
     */
    public function putTraceSegments(PutTraceSegmentsRequest $args)
    {
        $result = parent::putTraceSegments($args->toArray());
        return new PutTraceSegmentsResponse($result->toArray());
    }
}
