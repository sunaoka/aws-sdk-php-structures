<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DisassociateStreamForSegments;

trait DisassociateStreamForSegmentsTrait
{
    /**
     * @param DisassociateStreamForSegmentsRequest $args
     * @return DisassociateStreamForSegmentsResponse
     */
    public function disassociateStreamForSegments(DisassociateStreamForSegmentsRequest $args)
    {
        $result = parent::disassociateStreamForSegments($args->toArray());
        return new DisassociateStreamForSegmentsResponse($result->toArray());
    }
}
