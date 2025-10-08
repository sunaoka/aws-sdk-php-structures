<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateLocation;

trait CreateLocationTrait
{
    /**
     * @param CreateLocationRequest $args
     * @return CreateLocationResponse
     */
    public function createLocation(CreateLocationRequest $args)
    {
        $result = parent::createLocation($args->toArray());
        return new CreateLocationResponse($result->toArray());
    }
}
