<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateStorageLocation;

trait CreateStorageLocationTrait
{
    /**
     * @return CreateStorageLocationResponse
     */
    public function createStorageLocation()
    {
        $result = parent::createStorageLocation();
        return new CreateStorageLocationResponse($result->toArray());
    }
}
