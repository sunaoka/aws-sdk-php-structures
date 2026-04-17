<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListAntennas;

trait ListAntennasTrait
{
    /**
     * @param ListAntennasRequest $args
     * @return ListAntennasResponse
     */
    public function listAntennas(ListAntennasRequest $args)
    {
        $result = parent::listAntennas($args->toArray());
        return new ListAntennasResponse($result->toArray());
    }
}
