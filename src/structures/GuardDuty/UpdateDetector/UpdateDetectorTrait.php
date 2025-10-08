<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateDetector;

trait UpdateDetectorTrait
{
    /**
     * @param UpdateDetectorRequest $args
     * @return UpdateDetectorResponse
     */
    public function updateDetector(UpdateDetectorRequest $args)
    {
        $result = parent::updateDetector($args->toArray());
        return new UpdateDetectorResponse($result->toArray());
    }
}
