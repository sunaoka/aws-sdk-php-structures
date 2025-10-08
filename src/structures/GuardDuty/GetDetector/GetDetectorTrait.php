<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector;

trait GetDetectorTrait
{
    /**
     * @param GetDetectorRequest $args
     * @return GetDetectorResponse
     */
    public function getDetector(GetDetectorRequest $args)
    {
        $result = parent::getDetector($args->toArray());
        return new GetDetectorResponse($result->toArray());
    }
}
