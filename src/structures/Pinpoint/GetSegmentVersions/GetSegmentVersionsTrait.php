<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersions;

trait GetSegmentVersionsTrait
{
    /**
     * @param GetSegmentVersionsRequest $args
     * @return GetSegmentVersionsResponse
     */
    public function getSegmentVersions(GetSegmentVersionsRequest $args)
    {
        $result = parent::getSegmentVersions($args->toArray());
        return new GetSegmentVersionsResponse($result->toArray());
    }
}
