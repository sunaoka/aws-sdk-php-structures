<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersion;

trait GetSegmentVersionTrait
{
    /**
     * @param GetSegmentVersionRequest $args
     * @return GetSegmentVersionResponse
     */
    public function getSegmentVersion(GetSegmentVersionRequest $args)
    {
        $result = parent::getSegmentVersion($args->toArray());
        return new GetSegmentVersionResponse($result->toArray());
    }
}
