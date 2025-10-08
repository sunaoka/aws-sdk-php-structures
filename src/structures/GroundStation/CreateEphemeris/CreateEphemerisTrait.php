<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris;

trait CreateEphemerisTrait
{
    /**
     * @param CreateEphemerisRequest $args
     * @return CreateEphemerisResponse
     */
    public function createEphemeris(CreateEphemerisRequest $args)
    {
        $result = parent::createEphemeris($args->toArray());
        return new CreateEphemerisResponse($result->toArray());
    }
}
