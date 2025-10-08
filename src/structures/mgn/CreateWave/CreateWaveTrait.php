<?php

namespace Sunaoka\Aws\Structures\mgn\CreateWave;

trait CreateWaveTrait
{
    /**
     * @param CreateWaveRequest $args
     * @return CreateWaveResponse
     */
    public function createWave(CreateWaveRequest $args)
    {
        $result = parent::createWave($args->toArray());
        return new CreateWaveResponse($result->toArray());
    }
}
