<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteMedicalScribeJob;

trait DeleteMedicalScribeJobTrait
{
    /**
     * @param DeleteMedicalScribeJobRequest $args
     * @return void
     */
    public function deleteMedicalScribeJob(DeleteMedicalScribeJobRequest $args)
    {
        parent::deleteMedicalScribeJob($args->toArray());
    }
}
