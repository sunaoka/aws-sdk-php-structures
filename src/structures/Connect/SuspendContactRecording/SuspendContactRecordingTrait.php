<?php

namespace Sunaoka\Aws\Structures\Connect\SuspendContactRecording;

trait SuspendContactRecordingTrait
{
    /**
     * @param SuspendContactRecordingRequest $args
     * @return SuspendContactRecordingResponse
     */
    public function suspendContactRecording(SuspendContactRecordingRequest $args)
    {
        $result = parent::suspendContactRecording($args->toArray());
        return new SuspendContactRecordingResponse($result->toArray());
    }
}
