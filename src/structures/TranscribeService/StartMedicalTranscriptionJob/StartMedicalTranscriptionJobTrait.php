<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalTranscriptionJob;

trait StartMedicalTranscriptionJobTrait
{
    /**
     * @param StartMedicalTranscriptionJobRequest $args
     * @return StartMedicalTranscriptionJobResponse
     */
    public function startMedicalTranscriptionJob(StartMedicalTranscriptionJobRequest $args)
    {
        $result = parent::startMedicalTranscriptionJob($args->toArray());
        return new StartMedicalTranscriptionJobResponse($result->toArray());
    }
}
