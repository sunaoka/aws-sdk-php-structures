<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteTranscriptionJob;

trait DeleteTranscriptionJobTrait
{
    /**
     * @param DeleteTranscriptionJobRequest $args
     * @return void
     */
    public function deleteTranscriptionJob(DeleteTranscriptionJobRequest $args)
    {
        parent::deleteTranscriptionJob($args->toArray());
    }
}
