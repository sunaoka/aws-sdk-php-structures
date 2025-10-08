<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectorVersion;

trait GetDetectorVersionTrait
{
    /**
     * @param GetDetectorVersionRequest $args
     * @return GetDetectorVersionResponse
     */
    public function getDetectorVersion(GetDetectorVersionRequest $args)
    {
        $result = parent::getDetectorVersion($args->toArray());
        return new GetDetectorVersionResponse($result->toArray());
    }
}
