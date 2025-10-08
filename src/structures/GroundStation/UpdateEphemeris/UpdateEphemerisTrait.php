<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateEphemeris;

trait UpdateEphemerisTrait
{
    /**
     * @param UpdateEphemerisRequest $args
     * @return UpdateEphemerisResponse
     */
    public function updateEphemeris(UpdateEphemerisRequest $args)
    {
        $result = parent::updateEphemeris($args->toArray());
        return new UpdateEphemerisResponse($result->toArray());
    }
}
