<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StopSpeakerSearchTask;

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
