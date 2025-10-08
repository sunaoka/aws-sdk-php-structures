<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateAccessGrantsLocation;

trait UpdateAccessGrantsLocationTrait
{
    /**
     * @param UpdateAccessGrantsLocationRequest $args
     * @return UpdateAccessGrantsLocationResponse
     */
    public function updateAccessGrantsLocation(UpdateAccessGrantsLocationRequest $args)
    {
        $result = parent::updateAccessGrantsLocation($args->toArray());
        return new UpdateAccessGrantsLocationResponse($result->toArray());
    }
}
