<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData;

trait GetCurrentUserDataTrait
{
    /**
     * @param GetCurrentUserDataRequest $args
     * @return GetCurrentUserDataResponse
     */
    public function getCurrentUserData(GetCurrentUserDataRequest $args)
    {
        $result = parent::getCurrentUserData($args->toArray());
        return new GetCurrentUserDataResponse($result->toArray());
    }
}
