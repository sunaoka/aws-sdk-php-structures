<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteWave;

trait DeleteWaveTrait
{
    /**
     * @param DeleteWaveRequest $args
     * @return DeleteWaveResponse
     */
    public function deleteWave(DeleteWaveRequest $args)
    {
        $result = parent::deleteWave($args->toArray());
        return new DeleteWaveResponse($result->toArray());
    }
}
