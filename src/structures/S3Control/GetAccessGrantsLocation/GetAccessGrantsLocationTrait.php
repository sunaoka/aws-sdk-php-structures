<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrantsLocation;

trait GetAccessGrantsLocationTrait
{
    /**
     * @param GetAccessGrantsLocationRequest $args
     * @return GetAccessGrantsLocationResponse
     */
    public function getAccessGrantsLocation(GetAccessGrantsLocationRequest $args)
    {
        $result = parent::getAccessGrantsLocation($args->toArray());
        return new GetAccessGrantsLocationResponse($result->toArray());
    }
}
