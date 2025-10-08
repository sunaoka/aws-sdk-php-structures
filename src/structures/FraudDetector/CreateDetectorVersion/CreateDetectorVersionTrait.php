<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateDetectorVersion;

trait CreateDetectorVersionTrait
{
    /**
     * @param CreateDetectorVersionRequest $args
     * @return CreateDetectorVersionResponse
     */
    public function createDetectorVersion(CreateDetectorVersionRequest $args)
    {
        $result = parent::createDetectorVersion($args->toArray());
        return new CreateDetectorVersionResponse($result->toArray());
    }
}
