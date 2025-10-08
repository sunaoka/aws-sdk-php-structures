<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector;

trait CreateDetectorTrait
{
    /**
     * @param CreateDetectorRequest $args
     * @return CreateDetectorResponse
     */
    public function createDetector(CreateDetectorRequest $args)
    {
        $result = parent::createDetector($args->toArray());
        return new CreateDetectorResponse($result->toArray());
    }
}
