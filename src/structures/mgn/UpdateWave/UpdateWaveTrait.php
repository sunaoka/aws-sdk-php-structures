<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateWave;

trait UpdateWaveTrait
{
    /**
     * @param UpdateWaveRequest $args
     * @return UpdateWaveResponse
     */
    public function updateWave(UpdateWaveRequest $args)
    {
        $result = parent::updateWave($args->toArray());
        return new UpdateWaveResponse($result->toArray());
    }
}
