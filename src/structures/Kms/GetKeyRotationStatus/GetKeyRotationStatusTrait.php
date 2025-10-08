<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyRotationStatus;

trait GetKeyRotationStatusTrait
{
    /**
     * @param GetKeyRotationStatusRequest $args
     * @return GetKeyRotationStatusResponse
     */
    public function getKeyRotationStatus(GetKeyRotationStatusRequest $args)
    {
        $result = parent::getKeyRotationStatus($args->toArray());
        return new GetKeyRotationStatusResponse($result->toArray());
    }
}
