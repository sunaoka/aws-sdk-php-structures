<?php

namespace Sunaoka\Aws\Structures\mgn\UnarchiveWave;

trait UnarchiveWaveTrait
{
    /**
     * @param UnarchiveWaveRequest $args
     * @return UnarchiveWaveResponse
     */
    public function unarchiveWave(UnarchiveWaveRequest $args)
    {
        $result = parent::unarchiveWave($args->toArray());
        return new UnarchiveWaveResponse($result->toArray());
    }
}
