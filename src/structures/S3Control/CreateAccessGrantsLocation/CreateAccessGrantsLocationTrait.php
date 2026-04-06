<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrantsLocation;

trait CreateAccessGrantsLocationTrait
{
    /**
     * @param CreateAccessGrantsLocationRequest $args
     * @return CreateAccessGrantsLocationResponse
     */
    public function createAccessGrantsLocation(CreateAccessGrantsLocationRequest $args)
    {
        $result = parent::createAccessGrantsLocation($args->toArray());
        return new CreateAccessGrantsLocationResponse($result->toArray());
    }
}
