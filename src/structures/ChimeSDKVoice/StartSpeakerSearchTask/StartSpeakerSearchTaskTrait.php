<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartSpeakerSearchTask;

trait StartSpeakerSearchTaskTrait
{
    /**
     * @param StartSpeakerSearchTaskRequest $args
     * @return StartSpeakerSearchTaskResponse
     */
    public function startSpeakerSearchTask(StartSpeakerSearchTaskRequest $args)
    {
        $result = parent::startSpeakerSearchTask($args->toArray());
        return new StartSpeakerSearchTaskResponse($result->toArray());
    }
}
