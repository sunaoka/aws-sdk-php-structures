<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListEphemerides;

trait ListEphemeridesTrait
{
    /**
     * @param ListEphemeridesRequest $args
     * @return ListEphemeridesResponse
     */
    public function listEphemerides(ListEphemeridesRequest $args)
    {
        $result = parent::listEphemerides($args->toArray());
        return new ListEphemeridesResponse($result->toArray());
    }
}
