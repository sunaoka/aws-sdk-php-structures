<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveWave;

trait ArchiveWaveTrait
{
    /**
     * @param ArchiveWaveRequest $args
     * @return ArchiveWaveResponse
     */
    public function archiveWave(ArchiveWaveRequest $args)
    {
        $result = parent::archiveWave($args->toArray());
        return new ArchiveWaveResponse($result->toArray());
    }
}
