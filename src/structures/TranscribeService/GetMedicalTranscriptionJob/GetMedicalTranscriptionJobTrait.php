<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalTranscriptionJob;

trait GetMedicalTranscriptionJobTrait
{
    /**
     * @param GetMedicalTranscriptionJobRequest $args
     * @return GetMedicalTranscriptionJobResponse
     */
    public function getMedicalTranscriptionJob(GetMedicalTranscriptionJobRequest $args)
    {
        $result = parent::getMedicalTranscriptionJob($args->toArray());
        return new GetMedicalTranscriptionJobResponse($result->toArray());
    }
}
