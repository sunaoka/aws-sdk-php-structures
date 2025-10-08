<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationSmb;

trait CreateLocationSmbTrait
{
    /**
     * @param CreateLocationSmbRequest $args
     * @return CreateLocationSmbResponse
     */
    public function createLocationSmb(CreateLocationSmbRequest $args)
    {
        $result = parent::createLocationSmb($args->toArray());
        return new CreateLocationSmbResponse($result->toArray());
    }
}
