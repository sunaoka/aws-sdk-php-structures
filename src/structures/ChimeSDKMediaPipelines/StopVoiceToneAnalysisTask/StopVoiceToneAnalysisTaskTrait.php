<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StopVoiceToneAnalysisTask;

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
