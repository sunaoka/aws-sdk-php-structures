<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetWorkingLocation;

trait GetWorkingLocationTrait
{
    /**
     * @param GetWorkingLocationRequest $args
     * @return GetWorkingLocationResponse
     */
    public function getWorkingLocation(GetWorkingLocationRequest $args)
    {
        $result = parent::getWorkingLocation($args->toArray());
        return new GetWorkingLocationResponse($result->toArray());
    }
}
