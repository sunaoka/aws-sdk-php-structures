<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSpeakerSearchTask;

trait GetSpeakerSearchTaskTrait
{
    /**
     * @param GetSpeakerSearchTaskRequest $args
     * @return GetSpeakerSearchTaskResponse
     */
    public function getSpeakerSearchTask(GetSpeakerSearchTaskRequest $args)
    {
        $result = parent::getSpeakerSearchTask($args->toArray());
        return new GetSpeakerSearchTaskResponse($result->toArray());
    }
}
