<?php

namespace Sunaoka\Aws\Structures\Connect\ResumeContactRecording;

trait ResumeContactRecordingTrait
{
    /**
     * @param ResumeContactRecordingRequest $args
     * @return ResumeContactRecordingResponse
     */
    public function resumeContactRecording(ResumeContactRecordingRequest $args)
    {
        $result = parent::resumeContactRecording($args->toArray());
        return new ResumeContactRecordingResponse($result->toArray());
    }
}
