<?php

namespace Sunaoka\Aws\Structures\S3Control\GetDataAccess;

trait GetDataAccessTrait
{
    /**
     * @param GetDataAccessRequest $args
     * @return GetDataAccessResponse
     */
    public function getDataAccess(GetDataAccessRequest $args)
    {
        $result = parent::getDataAccess($args->toArray());
        return new GetDataAccessResponse($result->toArray());
    }
}
