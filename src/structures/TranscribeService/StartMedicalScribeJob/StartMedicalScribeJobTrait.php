<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob;

trait StartMedicalScribeJobTrait
{
    /**
     * @param StartMedicalScribeJobRequest $args
     * @return StartMedicalScribeJobResponse
     */
    public function startMedicalScribeJob(StartMedicalScribeJobRequest $args)
    {
        $result = parent::startMedicalScribeJob($args->toArray());
        return new StartMedicalScribeJobResponse($result->toArray());
    }
}
