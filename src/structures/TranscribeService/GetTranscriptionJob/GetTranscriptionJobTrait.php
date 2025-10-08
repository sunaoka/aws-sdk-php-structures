<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob;

trait GetTranscriptionJobTrait
{
    /**
     * @param GetTranscriptionJobRequest $args
     * @return GetTranscriptionJobResponse
     */
    public function getTranscriptionJob(GetTranscriptionJobRequest $args)
    {
        $result = parent::getTranscriptionJob($args->toArray());
        return new GetTranscriptionJobResponse($result->toArray());
    }
}
