<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalScribeJob;

trait GetMedicalScribeJobTrait
{
    /**
     * @param GetMedicalScribeJobRequest $args
     * @return GetMedicalScribeJobResponse
     */
    public function getMedicalScribeJob(GetMedicalScribeJobRequest $args)
    {
        $result = parent::getMedicalScribeJob($args->toArray());
        return new GetMedicalScribeJobResponse($result->toArray());
    }
}
