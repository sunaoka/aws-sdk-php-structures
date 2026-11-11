<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetSpaceDataAccess;

trait GetSpaceDataAccessTrait
{
    /**
     * @param GetSpaceDataAccessRequest $args
     * @return GetSpaceDataAccessResponse
     */
    public function getSpaceDataAccess(GetSpaceDataAccessRequest $args)
    {
        $result = parent::getSpaceDataAccess($args->toArray());
        return new GetSpaceDataAccessResponse($result->toArray());
    }
}
