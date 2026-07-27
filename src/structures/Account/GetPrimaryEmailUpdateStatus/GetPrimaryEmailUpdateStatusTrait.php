<?php

namespace Sunaoka\Aws\Structures\Account\GetPrimaryEmailUpdateStatus;

trait GetPrimaryEmailUpdateStatusTrait
{
    /**
     * @param GetPrimaryEmailUpdateStatusRequest $args
     * @return GetPrimaryEmailUpdateStatusResponse
     */
    public function getPrimaryEmailUpdateStatus(GetPrimaryEmailUpdateStatusRequest $args)
    {
        $result = parent::getPrimaryEmailUpdateStatus($args->toArray());
        return new GetPrimaryEmailUpdateStatusResponse($result->toArray());
    }
}
