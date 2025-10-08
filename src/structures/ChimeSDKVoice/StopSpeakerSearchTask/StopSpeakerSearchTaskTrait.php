<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StopSpeakerSearchTask;

trait StopSpeakerSearchTaskTrait
{
    /**
     * @param StopSpeakerSearchTaskRequest $args
     * @return void
     */
    public function stopSpeakerSearchTask(StopSpeakerSearchTaskRequest $args)
    {
        parent::stopSpeakerSearchTask($args->toArray());
    }
}
