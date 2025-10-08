<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves;

trait ListWavesTrait
{
    /**
     * @param ListWavesRequest $args
     * @return ListWavesResponse
     */
    public function listWaves(ListWavesRequest $args)
    {
        $result = parent::listWaves($args->toArray());
        return new ListWavesResponse($result->toArray());
    }
}
