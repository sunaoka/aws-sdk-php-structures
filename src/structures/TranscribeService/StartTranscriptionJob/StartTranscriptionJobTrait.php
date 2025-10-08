<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob;

trait StartTranscriptionJobTrait
{
    /**
     * @param StartTranscriptionJobRequest $args
     * @return StartTranscriptionJobResponse
     */
    public function startTranscriptionJob(StartTranscriptionJobRequest $args)
    {
        $result = parent::startTranscriptionJob($args->toArray());
        return new StartTranscriptionJobResponse($result->toArray());
    }
}
