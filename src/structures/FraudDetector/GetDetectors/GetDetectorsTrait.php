<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectors;

trait GetDetectorsTrait
{
    /**
     * @param GetDetectorsRequest $args
     * @return GetDetectorsResponse
     */
    public function getDetectors(GetDetectorsRequest $args)
    {
        $result = parent::getDetectors($args->toArray());
        return new GetDetectorsResponse($result->toArray());
    }
}
