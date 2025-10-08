<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteEphemeris;

trait DeleteEphemerisTrait
{
    /**
     * @param DeleteEphemerisRequest $args
     * @return DeleteEphemerisResponse
     */
    public function deleteEphemeris(DeleteEphemerisRequest $args)
    {
        $result = parent::deleteEphemeris($args->toArray());
        return new DeleteEphemerisResponse($result->toArray());
    }
}
