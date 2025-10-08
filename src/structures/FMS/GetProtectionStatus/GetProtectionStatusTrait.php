<?php

namespace Sunaoka\Aws\Structures\FMS\GetProtectionStatus;

trait GetProtectionStatusTrait
{
    /**
     * @param GetProtectionStatusRequest $args
     * @return GetProtectionStatusResponse
     */
    public function getProtectionStatus(GetProtectionStatusRequest $args)
    {
        $result = parent::getProtectionStatus($args->toArray());
        return new GetProtectionStatusResponse($result->toArray());
    }
}
