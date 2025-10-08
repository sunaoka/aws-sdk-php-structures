<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactRecording;

trait StartContactRecordingTrait
{
    /**
     * @param StartContactRecordingRequest $args
     * @return StartContactRecordingResponse
     */
    public function startContactRecording(StartContactRecordingRequest $args)
    {
        $result = parent::startContactRecording($args->toArray());
        return new StartContactRecordingResponse($result->toArray());
    }
}
