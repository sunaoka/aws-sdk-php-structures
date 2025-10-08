<?php

namespace Sunaoka\Aws\Structures\Athena\GetSessionStatus;

trait GetSessionStatusTrait
{
    /**
     * @param GetSessionStatusRequest $args
     * @return GetSessionStatusResponse
     */
    public function getSessionStatus(GetSessionStatusRequest $args)
    {
        $result = parent::getSessionStatus($args->toArray());
        return new GetSessionStatusResponse($result->toArray());
    }
}
