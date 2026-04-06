<?php

namespace Sunaoka\Aws\Structures\FSx\DetachAndDeleteS3AccessPoint;

trait DetachAndDeleteS3AccessPointTrait
{
    /**
     * @param DetachAndDeleteS3AccessPointRequest $args
     * @return DetachAndDeleteS3AccessPointResponse
     */
    public function detachAndDeleteS3AccessPoint(DetachAndDeleteS3AccessPointRequest $args)
    {
        $result = parent::detachAndDeleteS3AccessPoint($args->toArray());
        return new DetachAndDeleteS3AccessPointResponse($result->toArray());
    }
}
