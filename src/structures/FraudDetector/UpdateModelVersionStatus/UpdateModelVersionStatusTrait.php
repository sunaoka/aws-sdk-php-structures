<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateModelVersionStatus;

trait UpdateModelVersionStatusTrait
{
    /**
     * @param UpdateModelVersionStatusRequest $args
     * @return UpdateModelVersionStatusResponse
     */
    public function updateModelVersionStatus(UpdateModelVersionStatusRequest $args)
    {
        $result = parent::updateModelVersionStatus($args->toArray());
        return new UpdateModelVersionStatusResponse($result->toArray());
    }
}
