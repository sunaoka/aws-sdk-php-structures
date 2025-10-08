<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexes;

trait ListMultiplexesTrait
{
    /**
     * @param ListMultiplexesRequest $args
     * @return ListMultiplexesResponse
     */
    public function listMultiplexes(ListMultiplexesRequest $args)
    {
        $result = parent::listMultiplexes($args->toArray());
        return new ListMultiplexesResponse($result->toArray());
    }
}
