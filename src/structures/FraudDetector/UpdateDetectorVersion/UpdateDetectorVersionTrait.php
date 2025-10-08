<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateDetectorVersion;

trait UpdateDetectorVersionTrait
{
    /**
     * @param UpdateDetectorVersionRequest $args
     * @return UpdateDetectorVersionResponse
     */
    public function updateDetectorVersion(UpdateDetectorVersionRequest $args)
    {
        $result = parent::updateDetectorVersion($args->toArray());
        return new UpdateDetectorVersionResponse($result->toArray());
    }
}
