<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateDetectorVersionStatus;

trait UpdateDetectorVersionStatusTrait
{
    /**
     * @param UpdateDetectorVersionStatusRequest $args
     * @return UpdateDetectorVersionStatusResponse
     */
    public function updateDetectorVersionStatus(UpdateDetectorVersionStatusRequest $args)
    {
        $result = parent::updateDetectorVersionStatus($args->toArray());
        return new UpdateDetectorVersionStatusResponse($result->toArray());
    }
}
