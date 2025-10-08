<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StopVoiceToneAnalysisTask;

trait StopVoiceToneAnalysisTaskTrait
{
    /**
     * @param StopVoiceToneAnalysisTaskRequest $args
     * @return void
     */
    public function stopVoiceToneAnalysisTask(StopVoiceToneAnalysisTaskRequest $args)
    {
        parent::stopVoiceToneAnalysisTask($args->toArray());
    }
}
