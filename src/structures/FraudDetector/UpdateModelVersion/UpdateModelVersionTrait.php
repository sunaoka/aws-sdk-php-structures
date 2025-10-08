<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateModelVersion;

trait UpdateModelVersionTrait
{
    /**
     * @param UpdateModelVersionRequest $args
     * @return UpdateModelVersionResponse
     */
    public function updateModelVersion(UpdateModelVersionRequest $args)
    {
        $result = parent::updateModelVersion($args->toArray());
        return new UpdateModelVersionResponse($result->toArray());
    }
}
