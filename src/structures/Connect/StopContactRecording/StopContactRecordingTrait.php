<?php

namespace Sunaoka\Aws\Structures\Connect\StopContactRecording;

trait StopContactRecordingTrait
{
    /**
     * @param StopContactRecordingRequest $args
     * @return StopContactRecordingResponse
     */
    public function stopContactRecording(StopContactRecordingRequest $args)
    {
        $result = parent::stopContactRecording($args->toArray());
        return new StopContactRecordingResponse($result->toArray());
    }
}
