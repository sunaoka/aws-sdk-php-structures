<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteMedicalTranscriptionJob;

trait DeleteMedicalTranscriptionJobTrait
{
    /**
     * @param DeleteMedicalTranscriptionJobRequest $args
     * @return void
     */
    public function deleteMedicalTranscriptionJob(DeleteMedicalTranscriptionJobRequest $args)
    {
        parent::deleteMedicalTranscriptionJob($args->toArray());
    }
}
