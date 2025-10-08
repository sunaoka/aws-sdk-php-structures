<?php

namespace Sunaoka\Aws\Structures\Ssm\GetConnectionStatus;

trait GetConnectionStatusTrait
{
    /**
     * @param GetConnectionStatusRequest $args
     * @return GetConnectionStatusResponse
     */
    public function getConnectionStatus(GetConnectionStatusRequest $args)
    {
        $result = parent::getConnectionStatus($args->toArray());
        return new GetConnectionStatusResponse($result->toArray());
    }
}
